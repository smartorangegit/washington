<div id="callback-form" class="callback-form js-callback-form callback-form_closed">
    <div class="callback-form__container">
        <div class="callback-form__close-btn js-callback-form__close-btn">
            <div class="callback-form__close-image">
                close
            </div>
            <div>Закрити</div>
        </div>
        <div>
            <h3 class="callback-form__heading heading">Замовити телефонний дзвінок</h3>
        </div>
        <div>
            <form id="callback-form">
                <div class="callback-input callback-input_name js-input-name-container">
                    <input class="input-field input-field_name js-input-name" type="text" name="name" placeholder="Ваше ім’я:" data-required="true">
                    <div class="validation-error validation-error_required" style="display: none">Данне поле обов'язкове для заповнення</div>
                </div>
                <div class="callback-input callback-input_phone js-input-phone-container">
                    <input class="input-field input-field_phone js-input-phone__international js-input-phone" type="tel" name="phone" placeholder="Ваш телефон:" data-required="true">
                    <div class="validation-error validation-error_required" style="display: none">Данне поле обов'язкове для заповнення</div>
                    <div class="validation-error validation-error_phone-format" style="display: none">Невірний формат телефону</div>
                </div>
                <div class="callback-input callback-input_message js-input-message-container">
                    <textarea class="textarea textarea_message js-input-message" name="message" placeholder="Ваше питання:"></textarea>
                </div>
                <div class="callback-input callback-input_submit">
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