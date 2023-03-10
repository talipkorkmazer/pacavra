@php
    $edit = !is_null($dataTypeContent->getKey());
    $add  = is_null($dataTypeContent->getKey());
@endphp

@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_title', __('voyager::generic.'.($edit ? 'edit' : 'add')).' '.$dataType->getTranslatedAttribute('display_name_singular'))

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i>
        {{ __('voyager::generic.'.($edit ? 'edit' : 'add')).' '.$dataType->getTranslatedAttribute('display_name_singular') }}
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <div class="page-content edit-add container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-bordered">
                    <!-- form start -->
                    <form role="form"
                            class="form-edit-add"
                            action="{{ $edit ? route('voyager.'.$dataType->slug.'.update', $dataTypeContent->getKey()) : route('voyager.'.$dataType->slug.'.store') }}"
                            method="POST" enctype="multipart/form-data">
                        <!-- PUT Method if we are editing -->
                        @if($edit)
                            {{ method_field("PUT") }}
                        @endif

                        <!-- CSRF TOKEN -->
                        {{ csrf_field() }}

                        <div class="panel-body">

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- Adding / Editing -->
                            @php
                                $dataTypeRows = $dataType->{($edit ? 'editRows' : 'addRows' )};
                            @endphp

                            @foreach($dataTypeRows as $row)
                                <!-- GET THE DISPLAY OPTIONS -->
                                @php
                                    $display_options = $row->details->display ?? NULL;
                                    if ($dataTypeContent->{$row->field.'_'.($edit ? 'edit' : 'add')}) {
                                        $dataTypeContent->{$row->field} = $dataTypeContent->{$row->field.'_'.($edit ? 'edit' : 'add')};
                                    }
                                @endphp
                                @if (isset($row->details->legend) && isset($row->details->legend->text))
                                    <legend class="text-{{ $row->details->legend->align ?? 'center' }}" style="background-color: {{ $row->details->legend->bgcolor ?? '#f0f0f0' }};padding: 5px;">{{ $row->details->legend->text }}</legend>
                                @endif

                                <div class="form-group @if($row->type == 'hidden') hidden @endif col-md-{{ $display_options->width ?? 12 }} {{ $errors->has($row->field) ? 'has-error' : '' }}" @if(isset($display_options->id)){{ "id=$display_options->id" }}@endif>
                                    {{ $row->slugify }}
                                    <label class="control-label" for="name">{{ $row->getTranslatedAttribute('display_name') }}</label>
                                    @include('voyager::multilingual.input-hidden-bread-edit-add')
                                    @if (isset($row->details->view))
                                        @include($row->details->view, ['row' => $row, 'dataType' => $dataType, 'dataTypeContent' => $dataTypeContent, 'content' => $dataTypeContent->{$row->field}, 'action' => ($edit ? 'edit' : 'add'), 'view' => ($edit ? 'edit' : 'add'), 'options' => $row->details])
                                    @elseif ($row->type == 'relationship')
                                        @include('voyager::formfields.relationship', ['options' => $row->details])
                                    @else
                                        {!! app('voyager')->formField($row, $dataType, $dataTypeContent) !!}
                                    @endif

                                    @foreach (app('voyager')->afterFormFields($row, $dataType, $dataTypeContent) as $after)
                                        {!! $after->handle($row, $dataType, $dataTypeContent) !!}
                                    @endforeach
                                    @if ($errors->has($row->field))
                                        @foreach ($errors->get($row->field) as $error)
                                            <span class="help-block">{{ $error }}</span>
                                        @endforeach
                                    @endif
                                </div>
                            @endforeach

                        </div><!-- panel-body -->

                        <div class="panel-footer">
                            @section('submit-buttons')
                                <button type="submit" class="btn btn-primary save">{{ __('voyager::generic.save') }}</button>
                            @stop
                            @yield('submit-buttons')
                        </div>
                    </form>

                    <iframe id="form_target" name="form_target" style="display:none"></iframe>
                    <form id="my_form" action="{{ route('voyager.upload') }}" target="form_target" method="post"
                            enctype="multipart/form-data" style="width:0;height:0;overflow:hidden">
                        <input name="image" id="upload_file" type="file"
                                 onchange="$('#my_form').submit();this.value='';">
                        <input type="hidden" name="type_slug" id="type_slug" value="{{ $dataType->slug }}">
                        {{ csrf_field() }}
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-danger" id="confirm_delete_modal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><i class="voyager-warning"></i> {{ __('voyager::generic.are_you_sure') }}</h4>
                </div>

                <div class="modal-body">
                    <h4>{{ __('voyager::generic.are_you_sure_delete') }} '<span class="confirm_delete_name"></span>'</h4>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                    <button type="button" class="btn btn-danger" id="confirm_delete">{{ __('voyager::generic.delete_confirm') }}</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Delete File Modal -->
@stop

@section('javascript')
    <script>
        var params = {};
        var $file;

        function deleteHandler(tag, isMulti) {
          return function() {
            $file = $(this).siblings(tag);

            params = {
                slug:   '{{ $dataType->slug }}',
                filename:  $file.data('file-name'),
                id:     $file.data('id'),
                field:  $file.parent().data('field-name'),
                multi: isMulti,
                _token: '{{ csrf_token() }}'
            }

            $('.confirm_delete_name').text(params.filename);
            $('#confirm_delete_modal').modal('show');
          };
        }

        $('document').ready(function () {
            $('.toggleswitch').bootstrapToggle();

            //Init datepicker for date fields if data-datepicker attribute defined
            //or if browser does not handle date inputs
            $('.form-group input[type=date]').each(function (idx, elt) {
                if (elt.hasAttribute('data-datepicker')) {
                    elt.type = 'text';
                    $(elt).datetimepicker($(elt).data('datepicker'));
                } else if (elt.type != 'date') {
                    elt.type = 'text';
                    $(elt).datetimepicker({
                        format: 'L',
                        extraFormats: [ 'YYYY-MM-DD' ]
                    }).datetimepicker($(elt).data('datepicker'));
                }
            });

            @if ($isModelTranslatable)
                $('.side-body').multilingual({"editing": true});
            @endif

            $('.side-body input[data-slug-origin]').each(function(i, el) {
                $(el).slugify();
            });

            $('.form-group').on('click', '.remove-multi-image', deleteHandler('img', true));
            $('.form-group').on('click', '.remove-single-image', deleteHandler('img', false));
            $('.form-group').on('click', '.remove-multi-file', deleteHandler('a', true));
            $('.form-group').on('click', '.remove-single-file', deleteHandler('a', false));

            $('#confirm_delete').on('click', function(){
                $.post('{{ route('voyager.'.$dataType->slug.'.media.remove') }}', params, function (response) {
                    if ( response
                        && response.data
                        && response.data.status
                        && response.data.status == 200 ) {

                        toastr.success(response.data.message);
                        $file.parent().fadeOut(300, function() { $(this).remove(); })
                    } else {
                        toastr.error("Error removing file.");
                    }
                });

                $('#confirm_delete_modal').modal('hide');
            });
            $('[data-toggle="tooltip"]').tooltip();
            function convertToSlug(Text) {
                return Text.toLowerCase()
                    .replace(/[^\w ]+/g, '')
                    .replace(/ +/g, '-');
            }
            $('input[name="name"]').on('input', function() {
                $('input[name="slug"]').val(URLify($(this).val()));
            });
        });

        const LATIN_MAP = {
            '??': 'A', '??': 'A', '??': 'A', '??': 'A', '??': 'A', '??': 'A', '??': 'AE',
            '??': 'C', '??': 'E', '??': 'E', '??': 'E', '??': 'E', '??': 'I', '??': 'I',
            '??': 'I', '??': 'I', '??': 'D', '??': 'N', '??': 'O', '??': 'O', '??': 'O',
            '??': 'O', '??': 'O', '??': 'O', '??': 'O', '??': 'U', '??': 'U', '??': 'U',
            '??': 'U', '??': 'U', '??': 'Y', '??': 'TH', '??': 'Y', '??': 'ss', '??': 'a',
            '??': 'a', '??': 'a', '??': 'a', '??': 'a', '??': 'a', '??': 'ae', '??': 'c',
            '??': 'e', '??': 'e', '??': 'e', '??': 'e', '??': 'i', '??': 'i', '??': 'i',
            '??': 'i', '??': 'd', '??': 'n', '??': 'o', '??': 'o', '??': 'o', '??': 'o',
            '??': 'o', '??': 'o', '??': 'o', '??': 'u', '??': 'u', '??': 'u', '??': 'u',
            '??': 'u', '??': 'y', '??': 'th', '??': 'y'
        };
        const LATIN_SYMBOLS_MAP = {
            '??': '(c)'
        };
        const GREEK_MAP = {
            '??': 'a', '??': 'b', '??': 'g', '??': 'd', '??': 'e', '??': 'z', '??': 'h',
            '??': '8', '??': 'i', '??': 'k', '??': 'l', '??': 'm', '??': 'n', '??': '3',
            '??': 'o', '??': 'p', '??': 'r', '??': 's', '??': 't', '??': 'y', '??': 'f',
            '??': 'x', '??': 'ps', '??': 'w', '??': 'a', '??': 'e', '??': 'i', '??': 'o',
            '??': 'y', '??': 'h', '??': 'w', '??': 's', '??': 'i', '??': 'y', '??': 'y',
            '??': 'i', '??': 'A', '??': 'B', '??': 'G', '??': 'D', '??': 'E', '??': 'Z',
            '??': 'H', '??': '8', '??': 'I', '??': 'K', '??': 'L', '??': 'M', '??': 'N',
            '??': '3', '??': 'O', '??': 'P', '??': 'R', '??': 'S', '??': 'T', '??': 'Y',
            '??': 'F', '??': 'X', '??': 'PS', '??': 'W', '??': 'A', '??': 'E', '??': 'I',
            '??': 'O', '??': 'Y', '??': 'H', '??': 'W', '??': 'I', '??': 'Y'
        };
        const TURKISH_MAP = {
            '??': 's', '??': 'S', '??': 'i', '??': 'I', '??': 'c', '??': 'C', '??': 'u',
            '??': 'U', '??': 'o', '??': 'O', '??': 'g', '??': 'G'
        };
        const ROMANIAN_MAP = {
            '??': 'a', '??': 'i', '??': 's', '??': 't', '??': 'a',
            '??': 'A', '??': 'I', '??': 'S', '??': 'T', '??': 'A'
        };
        const RUSSIAN_MAP = {
            '??': 'a', '??': 'b', '??': 'v', '??': 'g', '??': 'd', '??': 'e', '??': 'yo',
            '??': 'zh', '??': 'z', '??': 'i', '??': 'j', '??': 'k', '??': 'l', '??': 'm',
            '??': 'n', '??': 'o', '??': 'p', '??': 'r', '??': 's', '??': 't', '??': 'u',
            '??': 'f', '??': 'h', '??': 'c', '??': 'ch', '??': 'sh', '??': 'sh', '??': '',
            '??': 'y', '??': '', '??': 'e', '??': 'yu', '??': 'ya',
            '??': 'A', '??': 'B', '??': 'V', '??': 'G', '??': 'D', '??': 'E', '??': 'Yo',
            '??': 'Zh', '??': 'Z', '??': 'I', '??': 'J', '??': 'K', '??': 'L', '??': 'M',
            '??': 'N', '??': 'O', '??': 'P', '??': 'R', '??': 'S', '??': 'T', '??': 'U',
            '??': 'F', '??': 'H', '??': 'C', '??': 'Ch', '??': 'Sh', '??': 'Sh', '??': '',
            '??': 'Y', '??': '', '??': 'E', '??': 'Yu', '??': 'Ya'
        };
        const UKRAINIAN_MAP = {
            '??': 'Ye', '??': 'I', '??': 'Yi', '??': 'G', '??': 'ye', '??': 'i',
            '??': 'yi', '??': 'g'
        };
        const CZECH_MAP = {
            '??': 'c', '??': 'd', '??': 'e', '??': 'n', '??': 'r', '??': 's', '??': 't',
            '??': 'u', '??': 'z', '??': 'C', '??': 'D', '??': 'E', '??': 'N', '??': 'R',
            '??': 'S', '??': 'T', '??': 'U', '??': 'Z'
        };
        const SLOVAK_MAP = {
            '??': 'a', '??': 'a', '??': 'c', '??': 'd', '??': 'e', '??': 'i', '??': 'l',
            '??': 'l', '??': 'n', '??': 'o', '??': 'o', '??': 'r', '??': 's', '??': 't',
            '??': 'u', '??': 'y', '??': 'z',
            '??': 'a', '??': 'A', '??': 'C', '??': 'D', '??': 'E', '??': 'I', '??': 'L',
            '??': 'L', '??': 'N', '??': 'O', '??': 'O', '??': 'R', '??': 'S', '??': 'T',
            '??': 'U', '??': 'Y', '??': 'Z'
        };
        const POLISH_MAP = {
            '??': 'a', '??': 'c', '??': 'e', '??': 'l', '??': 'n', '??': 'o', '??': 's',
            '??': 'z', '??': 'z',
            '??': 'A', '??': 'C', '??': 'E', '??': 'L', '??': 'N', '??': 'O', '??': 'S',
            '??': 'Z', '??': 'Z'
        };
        const LATVIAN_MAP = {
            '??': 'a', '??': 'c', '??': 'e', '??': 'g', '??': 'i', '??': 'k', '??': 'l',
            '??': 'n', '??': 's', '??': 'u', '??': 'z',
            '??': 'A', '??': 'C', '??': 'E', '??': 'G', '??': 'I', '??': 'K', '??': 'L',
            '??': 'N', '??': 'S', '??': 'U', '??': 'Z'
        };
        const ARABIC_MAP = {
            '??': 'a', '??': 'b', '??': 't', '??': 'th', '??': 'g', '??': 'h', '??': 'kh', '??': 'd',
            '??': 'th', '??': 'r', '??': 'z', '??': 's', '??': 'sh', '??': 's', '??': 'd', '??': 't',
            '??': 'th', '??': 'aa', '??': 'gh', '??': 'f', '??': 'k', '??': 'k', '??': 'l', '??': 'm',
            '??': 'n', '??': 'h', '??': 'o', '??': 'y'
        };
        const LITHUANIAN_MAP = {
            '??': 'a', '??': 'c', '??': 'e', '??': 'e', '??': 'i', '??': 's', '??': 'u',
            '??': 'u', '??': 'z',
            '??': 'A', '??': 'C', '??': 'E', '??': 'E', '??': 'I', '??': 'S', '??': 'U',
            '??': 'U', '??': 'Z'
        };
        const SERBIAN_MAP = {
            '??': 'dj', '??': 'j', '??': 'lj', '??': 'nj', '??': 'c', '??': 'dz',
            '??': 'dj', '??': 'Dj', '??': 'j', '??': 'Lj', '??': 'Nj', '??': 'C',
            '??': 'Dz', '??': 'Dj'
        };
        const AZERBAIJANI_MAP = {
            '??': 'c', '??': 'e', '??': 'g', '??': 'i', '??': 'o', '??': 's', '??': 'u',
            '??': 'C', '??': 'E', '??': 'G', '??': 'I', '??': 'O', '??': 'S', '??': 'U'
        };
        const GEORGIAN_MAP = {
            '???': 'a', '???': 'b', '???': 'g', '???': 'd', '???': 'e', '???': 'v', '???': 'z',
            '???': 't', '???': 'i', '???': 'k', '???': 'l', '???': 'm', '???': 'n', '???': 'o',
            '???': 'p', '???': 'j', '???': 'r', '???': 's', '???': 't', '???': 'u', '???': 'f',
            '???': 'q', '???': 'g', '???': 'y', '???': 'sh', '???': 'ch', '???': 'c', '???': 'dz',
            '???': 'w', '???': 'ch', '???': 'x', '???': 'j', '???': 'h'
        };

        const ALL_DOWNCODE_MAPS = [
            LATIN_MAP,
            LATIN_SYMBOLS_MAP,
            GREEK_MAP,
            TURKISH_MAP,
            ROMANIAN_MAP,
            RUSSIAN_MAP,
            UKRAINIAN_MAP,
            CZECH_MAP,
            SLOVAK_MAP,
            POLISH_MAP,
            LATVIAN_MAP,
            ARABIC_MAP,
            LITHUANIAN_MAP,
            SERBIAN_MAP,
            AZERBAIJANI_MAP,
            GEORGIAN_MAP
        ];

        const Downcoder = {
            'Initialize': function() {
                if (Downcoder.map) { // already made
                    return;
                }
                Downcoder.map = {};
                for (const lookup of ALL_DOWNCODE_MAPS) {
                    Object.assign(Downcoder.map, lookup);
                }
                Downcoder.regex = new RegExp(Object.keys(Downcoder.map).join('|'), 'g');
            }
        };

        function downcode(slug) {
            Downcoder.Initialize();
            return slug.replace(Downcoder.regex, function(m) {
                return Downcoder.map[m];
            });
        }


        function URLify(s, num_chars, allowUnicode) {
            // changes, e.g., "Petty theft" to "petty-theft"
            if (!allowUnicode) {
                s = downcode(s);
            }
            s = s.toLowerCase(); // convert to lowercase
            // if downcode doesn't hit, the char will be stripped here
            if (allowUnicode) {
                // Keep Unicode letters including both lowercase and uppercase
                // characters, whitespace, and dash; remove other characters.
                s = XRegExp.replace(s, XRegExp('[^-_\\p{L}\\p{N}\\s]', 'g'), '');
            } else {
                s = s.replace(/[^-\w\s]/g, ''); // remove unneeded chars
            }
            s = s.replace(/^\s+|\s+$/g, ''); // trim leading/trailing spaces
            s = s.replace(/[-\s]+/g, '-'); // convert spaces to hyphens
            s = s.substring(0, num_chars); // trim to first num_chars chars
            return s.replace(/-+$/g, ''); // trim any trailing hyphens
        }
        window.URLify = URLify;
    </script>
@stop
