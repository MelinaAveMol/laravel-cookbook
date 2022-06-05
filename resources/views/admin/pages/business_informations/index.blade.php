@extends('admin.layout.table-form')

@section('table')
 
    @if(isset($business_informations))
        @foreach($business_informations as $business_information_element)
            <div class="registers">
                <div class="desktop-two-columns">
                    <div class="column">
                        <div class="registers-data">
                            <div><label for="">ID:<span>{{$business_information_element->id}}</span></label></div>
                            <div><label for="">Nombre:<span>{{$business_information_element->name}}</span></label></div>
                            <div><label for="">Creado el:<span>{{$business_information_element->created_at}}</span></label></div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="registers-icons">
                            <span>
                                <svg viewBox="0 0 24 24" class="edit-button"  data-url="{{route('business_informations_edit',['business_information' => $business_information_element->id])}}">
                                    <path fill="currentColor" d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" />
                                </svg>
                            </span>
                            <span>
                                <svg viewBox="0 0 24 24" class="delete-button" data-url="{{route('business_informations_destroy', ['business_information' => $business_information_element->id])}}">
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
    @if(isset($business_information))
    <form class="admin-form" action="{{route("business_informations_store")}}">

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
                    @include('admin.components.desktop.items-options', ['route' => 'business_informations'])
                </div>
            </div>

            <div class="desktop-one-column">
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Nombre</label>
                    </div>
                    <div class="form-input">
                        <input  type="text" name="commercial_strategies" value="{{isset($business_information->commercial_strategies) ? $business_information->commercial_strategies : ''}}">
                    </div>
                </div>
            </div>
            <div class="desktop-one-column">
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Nombre</label>
                    </div>
                    <div class="form-input">
                        <input  type="text" name="name" value="{{isset($business_information->business_methods) ? $business_information->business_methods : ''}}">
                    </div>
                </div>
            </div>
            <div class="desktop-one-column">
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Nombre</label>
                    </div>
                    <div class="form-input">
                        <input  type="text" name="name" value="{{isset($business_information->name) ? $business_information->name : ''}}">
                    </div>
                </div>
            </div>
            <div class="desktop-one-column">
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Nombre</label>
                    </div>
                    <div class="form-input">
                        <input  type="text" name="name" value="{{isset($business_information->name) ? $business_information->name : ''}}">
                    </div>
                </div>
            </div>

            <div class="desktop-one-column">
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Nombre</label>
                    </div>
                    <div class="form-input">
                        <input  type="text" name="name" value="{{isset($business_information->name) ? $business_information->name : ''}}">
                    </div>
                </div>
            </div>

            <div class="desktop-one-column">
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Nombre</label>
                    </div>
                    <div class="form-input">
                        <input  type="text" name="name" value="{{isset($business_information->name) ? $business_information->name : ''}}">
                    </div>
                </div>
            </div>

            <div class="desktop-one-column">
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Nombre</label>
                    </div>
                    <div class="form-input">
                        <input  type="text" name="name" value="{{isset($business_information->name) ? $business_information->name : ''}}">
                    </div>
                </div>
            </div>

            <div class="desktop-one-column">
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Nombre</label>
                    </div>
                    <div class="form-input">
                        <input  type="text" name="name" value="{{isset($business_information->name) ? $business_information->name : ''}}">
                    </div>
                </div>
            </div>

            <div class="desktop-one-column">
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Nombre</label>
                    </div>
                    <div class="form-input">
                        <input  type="text" name="name" value="{{isset($business_information->name) ? $business_information->name : ''}}">
                    </div>
                </div>
            </div>

            <div class="desktop-one-column">
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Nombre</label>
                    </div>
                    <div class="form-input">
                        <input  type="text" name="name" value="{{isset($business_information->name) ? $business_information->name : ''}}">
                    </div>
                </div>
            </div>

            <div class="desktop-one-column">
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Nombre</label>
                    </div>
                    <div class="form-input">
                        <input  type="text" name="name" value="{{isset($business_information->name) ? $business_information->name : ''}}">
                    </div>
                </div>
            </div>

            <div class="desktop-one-column">
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Nombre</label>
                    </div>
                    <div class="form-input">
                        <input  type="text" name="name" value="{{isset($business_information->name) ? $business_information->name : ''}}">
                    </div>
                </div>
            </div>

            <div class="desktop-one-column">
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Nombre</label>
                    </div>
                    <div class="form-input">
                        <input  type="text" name="name" value="{{isset($business_information->name) ? $business_information->name : ''}}">
                    </div>
                </div>
            </div>

            <div class="desktop-one-column">
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Nombre</label>
                    </div>
                    <div class="form-input">
                        <input  type="text" name="name" value="{{isset($business_information->name) ? $business_information->name : ''}}">
                    </div>
                </div>
            </div>

            <div class="desktop-one-column">
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Nombre</label>
                    </div>
                    <div class="form-input">
                        <input  type="text" name="name" value="{{isset($business_information->name) ? $business_information->name : ''}}">
                    </div>
                </div>
            </div>

            <div class="desktop-one-column">
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Nombre</label>
                    </div>
                    <div class="form-input">
                        <input  type="text" name="name" value="{{isset($business_information->name) ? $business_information->name : ''}}">
                    </div>
                </div>
            </div>

            <div class="desktop-one-column">
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Nombre</label>
                    </div>
                    <div class="form-input">
                        <input  type="text" name="name" value="{{isset($business_information->name) ? $business_information->name : ''}}">
                    </div>
                </div>
            </div>

            <div class="desktop-one-column">
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Nombre</label>
                    </div>
                    <div class="form-input">
                        <input  type="text" name="name" value="{{isset($business_information->name) ? $business_information->name : ''}}">
                    </div>
                </div>
            </div>

            <div class="desktop-one-column">
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Nombre</label>
                    </div>
                    <div class="form-input">
                        <input  type="text" name="name" value="{{isset($business_information->name) ? $business_information->name : ''}}">
                    </div>
                </div>
            </div>

            <div class="desktop-one-column">
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Nombre</label>
                    </div>
                    <div class="form-input">
                        <input  type="text" name="name" value="{{isset($business_information->name) ? $business_information->name : ''}}">
                    </div>
                </div>
            </div>

            <div class="desktop-one-column">
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Nombre</label>
                    </div>
                    <div class="form-input">
                        <input  type="text" name="name" value="{{isset($business_information->name) ? $business_information->name : ''}}">
                    </div>
                </div>
            </div>

            <div class="desktop-one-column">
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Nombre</label>
                    </div>
                    <div class="form-input">
                        <input  type="text" name="name" value="{{isset($business_information->name) ? $business_information->name : ''}}">
                    </div>
                </div>
            </div>

            <div class="desktop-one-column">
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Nombre</label>
                    </div>
                    <div class="form-input">
                        <input  type="text" name="name" value="{{isset($business_information->name) ? $business_information->name : ''}}">
                    </div>
                </div>
            </div>

            <div class="desktop-one-column">
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Nombre</label>
                    </div>
                    <div class="form-input">
                        <input  type="text" name="name" value="{{isset($business_information->name) ? $business_information->name : ''}}">
                    </div>
                </div>
            </div>

            <div class="desktop-one-column">
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Nombre</label>
                    </div>
                    <div class="form-input">
                        <input  type="text" name="name" value="{{isset($business_information->name) ? $business_information->name : ''}}">
                    </div>
                </div>
            </div>

            <div class="desktop-one-column">
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Nombre</label>
                    </div>
                    <div class="form-input">
                        <input  type="text" name="name" value="{{isset($business_information->name) ? $business_information->name : ''}}">
                    </div>
                </div>
            </div>

            <div class="desktop-one-column">
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Nombre</label>
                    </div>
                    <div class="form-input">
                        <input  type="text" name="name" value="{{isset($business_information->name) ? $business_information->name : ''}}">
                    </div>
                </div>
            </div>

            <div class="desktop-one-column">
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Nombre</label>
                    </div>
                    <div class="form-input">
                        <input  type="text" name="name" value="{{isset($business_information->name) ? $business_information->name : ''}}">
                    </div>
                </div>
            </div>

            <div class="desktop-one-column">
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Nombre</label>
                    </div>
                    <div class="form-input">
                        <input  type="text" name="name" value="{{isset($business_information->name) ? $business_information->name : ''}}">
                    </div>
                </div>
            </div>

            <div class="desktop-one-column">
                <div class="form-group">
                    <div class="form-label">
                        <label for="">Nombre</label>
                    </div>
                    <div class="form-input">
                        <input  type="text" name="name" value="{{isset($business_information->name) ? $business_information->name : ''}}">
                    </div>
                </div>
            </div>




        
        </div>
    </form>
    @endif
@endsection
