<?$webAd = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>
<div id="callback-form" class="callback-form js-callback-form callback-form_closed">
    <div class="callback-form__container">
        <div class="page-top page-top__menu page-top__callback">
            <div class="page-top__wrapper callback-page-top__wrapper">
                <div class="page-top_heading">
                    <h3>Замовити зворотній дзвінок</h3>
                    <div class="page-top__letter-w menu-page-top__letter-w-wrap">
                        <svg class="menu-page-top__letter-w-wrap" height="100%" width="100%" viewBox="0 0 171.332 134.318">
                                <path class="letter_W_left menu_letter_W_left letter_W_left_white" d="M.76.677l57.1 132.39L116.065.668l-4.903.004-52.49 119.207L7.155.673z"/>
                                <path class="letter_W_right menu_letter_W_right letter_W_right_white" d="M55.26.508l57.1 132.39L170.565.5l-4.902.004-52.49 119.206L61.655.505z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <form id="callback-form-main" class="callback-form__form">
                <img class="callback-form__close-btn js-callback-form__close-btn" src="/wp-content/themes/washington/assets/img/common/close-menu.png" alt="close">
                <div class="callback-input callback-input_name js-input-name-container">
                    <input class="input-field input-field_name js-input-name" type="text" name="name" placeholder="Ваше ім’я:" data-required="true"
                           onkeyup="javascript:countme('callback-form-main');">
                    <span class="required-field-icon">(обов’язково)</span>
                    <div class="validation-error validation-error__callback-form validation-error_required" style="display: none">Данне поле обов'язкове для заповнення</div>
                </div>
                <div class="callback-input callback-input_phone js-input-phone-container">
                    <input class="input-field input-field_phone js-input-phone__international js-input-phone" type="tel" name="phone" placeholder="Ваш телефон:" data-required="true">
                    <span class="required-field-icon">(обов’язково)</span>
                    <div class="validation-error validation-error__callback-form validation-error_required" style="display: none">Данне поле обов'язкове для заповнення</div>
                    <div class="validation-error validation-error__callback-form validation-error_phone-format" style="display: none">Невірний формат телефону</div>
                </div>
                <div class="callback-input callback-input_message js-input-message-container">
                    <textarea class="textarea textarea_message js-input-message" name="message" placeholder="Ваше питання:"></textarea>
                    <span class="required-field-icon">(не обов’язково)</span>
                </div>
                <div class="contacts-form__callback-input callback-input contacts-form__callback-input_time js-input-time-container">
                    <input class="js-input-time tab-form__input-time input-field" type="text" name="time" placeholder="Ми передзвонимо у зручний час:"  autocomplete="something-new" data-required="false">
                    <span class="required-field-icon">(не обов’язково)</span>
                </div>
                <div class="callback-input callback-input_submit">
				<input  name="typ" class="webad" type="hidden" value="1" >
				<input  name="webad" class="webad" type="hidden" value="<?=$webAd;?>"/>
                <input  name="metka" class="metka" type="hidden" value="Замовити телефонний дзвінок - Washington"/>
                <input  name="inn" class="userInn" type="hidden" value="Washington"/>
                    <input class="submit_btn" type="submit" value="Відправити">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal modal-success">
    <div class="modal__close-btn">
        close
    </div>
    <div>
        <p>Ваше повідомлення відправлено.</p>
        <p>Наші менеджери звяжуться з Вами</p>
    </div>
</div>
