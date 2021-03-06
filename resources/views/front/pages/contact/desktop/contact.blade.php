
<div class="contact">
    <div class="contact-title">
        <h1>Contacte con nosotros</h1>
    </div>
    <div class="contact-frame">
        <div class="desktop-two-columns">
            <div class="column">
                <div class="company-data">
                    <ul>
                        <li>
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z" />
                            </svg>
                            +34678900384
                        </li>
                        <li>
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" />
                            </svg>
                            info@cookinsoul.com
                        </li>
                        <li>
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z" />
                            </svg>
                            Calle Colubí
                        </li>
                        <li>
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="currentColor"  d="M7,12H9V14H7V12M21,6V20A2,2 0 0,1 19,22H5C3.89,22 3,21.1 3,20V6A2,2 0 0,1 5,4H6V2H8V4H16V2H18V4H19A2,2 0 0,1 21,6M5,8H19V6H5V8M19,20V10H5V20H19M15,14H17V12H15V14M11,14H13V12H11V14Z" />
                            </svg>
                            De Lunes a Viernes
                        </li>
                    </ul>
                </div>
            </div>
            <div class="column">
                <div class="front-form" data-url="route('front_contact_form')" >
                    <form>
                        <div class="desktop-two-columns">
                            <div class="column">
                                <div class="form-element">
                                    <div class="form-element-label">
                                        <label>Nombre</label>
                                    </div>
                                    <div class="form-element-input">
                                        <input  type="text" name="name" value="{">                                        
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="form-element">
                                    <div class="form-element-label">
                                        <label>Apellidos</label>
                                    </div>
                                    <div class="form-element-input">
                                        <input  type="text" name="surname" value="">
                                    </div>
                                </div>
                            </div>   
                        </div>
                        <div class="desktop-two-columns">
                            <div class="column">
                                <div class="form-element">
                                    <div class="form-element-label">
                                        <label>Móvil</label>
                                    </div>
                                    <div class="form-element-input">
                                        <input  type="text" name="mobile" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="form-element">
                                    <div class="form-element-label">
                                        <label>E-mail</label>
                                    </div>
                                    <div class="form-element-input">
                                        <input  type="text" name="email" value="">
                                    </div>
                                </div>
                            </div>   
                        </div>
                        <div class="desktop-one-column">
                            <div class="column">
                                <div class="form-element">
                                    <div class="form-element-label">
                                        <label>E-mail</label>
                                    </div>
                                    <div class="form-element-input">
                                        <textarea class="editor" name="message" ></textarea>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="desktop-one-column">
                            <div class="column">
                                <div id="form-send-button" action="{{route("contacts_store")}}">
                                    <button>Enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
