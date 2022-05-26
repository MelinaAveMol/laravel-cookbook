@extends('admin.layout.table-form')

@section('table')
 
    @if(isset($faqs))
        @foreach($faqs as $faq_element)
            <div class="registers">
                <div class="desktop-two-columns">
                    <div class="column">
                        <div class="registers-dates">
                            <div><label for="">ID:<span>{{$faq_element->id}}</span></label></div>
                            <div><label for="">Nombre:<span>{{$faq_element->name}}</span></label></div>
                            <div><label for="">Creado el:<span>{{$faq_element->created_at}}</span></label></div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="registers-icons">
                            <span>
                                <svg viewBox="0 0 24 24" class="edit-button"  data-url="{{route('faqs_edit',['faq' => $faq_element->id])}}">
                                    <path fill="currentColor" d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" />
                                </svg>
                            </span>
                            <span>
                                <svg viewBox="0 0 24 24" class="delete-button" data-url="{{route('faqs_destroy', ['faq' => $faq_element->id])}}">
                                    <path fill="currentColor" d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="register-data">
                    <div>
                        <p>1 Registro</p>
                        <p>Mostrando la Pagina 1 de 1</p>
                    </div>
                    <ul>
                        <li>Primera</li>
                        <li>Anterior</li>
                        <li>Siguiente</li>
                        <li>Ultima</li>
                    </ul>   
                </div>
            </div>
        @endforeach
    @endif

@endsection

@section('form')
    @if(isset($faq))
    <form class="admin-form" action="{{route("faqs_store")}}">

        <input type="hidden" name="id">

        <div class="panel">
            <div class="desktop-two-columns" id="color-panel">
                <div class="column">
                    <div class="gestion">
                        <div class="contents">
                            <button>Contenido</button>
                            <button>Imagenes</button>
                            <button>Seo</button>
                        </div>
                    </div>
                </div>

                <div class="column">
                    @include('admin.components.desktop.items-options', ['route' => 'faqs'])
                </div>
            </div>

            <div class="desktop-one-column">
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Nombre</label>
                    </div>
                    <div class="form-input">
                        <input  type="text" name="name" value="{{isset($faq->name) ? $faq->name : ''}}">
                    </div>
                </div>
            </div>

            <div class="desktop-one-column">   
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Titulo</label>
                    </div>
                    <div class="form-input">
                        <input  type="text" name="title" value="{{isset($faq->title) ? $faq->title : ''}}">
                    </div>
                </div>
            </div>

            <div class="text-editor">
                <div>
                    <label for="">Descripción</label>
                </div>
                <textarea class="editor" name="description" id="ckeditor">{{isset($faq->description) ? $faq->description : ''}}</textarea>
            </div>
        </div>
    </form>
    @endif
@endsection
