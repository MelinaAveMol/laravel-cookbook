@extends('admin.layout.table-form')

@section('table')

    <div class="registers">
        <div class="desktop-two-columns">
            <div class="column">
                @if(isset($faqs))
                    @foreach($faqs as $faq_element)
                        <div class="registers-dates">
                            <div><label for="">ID:<span>{{$faq_element->id}}</span></label></div>
                            <div><label for="">Nombre:<span>{{$faq_element->name}}</span></label></div>
                            <div><label for="">Creado el:<span>{{$faq_element->created_at}}</span></label></div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="column">
                @include('admin.components.desktop.register-icons')
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

@endsection

@section('form')
    <form class="admin-form">
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
                    @include('admin.components.desktop.items-options')
                </div>
            </div>

            <div class="category">
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Catalogo</label>
                    </div>
                    <div class="form-select">
                        <select name="categoria" id="">
                            <option value="cosa">Seleccionar</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Nombre</label>
                    </div>
                    <div class="form-input">
                        <input type="text">
                    </div>
                </div>
            </div>

            <div class="language">
                <div class="form-button">
                    <button>Español</button>
                    <button>Ingles</button>
                    <button>Frances</button>
                </div>
            </div>

            <div class="description">   
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Titulo</label>
                    </div>
                    <div class="form-input">
                        <input type="text">
                    </div>
                </div>
            </div>

            <div class="text-editor">
                <div>
                    <label for="">Nombre</label>
                </div>
                <textarea class="editor" id="ckeditor"></textarea>
            </div>
        </div>
    </form>
@endsection
