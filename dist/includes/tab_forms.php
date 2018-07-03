<section class="contacts animate">
    <div class="contacts__wrapper">
        <div class="contacts__tabs">
            <div class="contacts__tab contacts__tab_1" data-tab="our-contacts">Наші контактні дані</div>
            <div class="contacts__tab contacts__tab_active contacts__tab_2" data-tab="get-callback">Замовити дзвінок</div>
            <div class="contacts__tab contacts__tab_3" data-tab="contacts-callback-form">Форма зворотного зв′язку</div>
        </div>
    
        <div id="our-contacts" class="contacts__tab-content contacts__tab-content__hidden our-contacts">
            <h3 class="heading contacts__heading">
                Наші контактні дані
            </h3>
            <img src="img/tab-forms/Logo-callback.png" alt="logo" class="our-contacts__image">
            <ul class="our-contacts-list">
                <li class="our-contacts-list__item our-contacts-list__item_1">
                    <p class="our-contacts-list__heading">Наш телефон:</p>
                    <p class="our-contacts-list__info">(044) 290-73-86</p>
                </li>
                <li class="our-contacts-list__item our-contacts-list__item_2">
                    <p class="our-contacts-list__heading">Години роботи відділу продажу:</p>
                    <p class="our-contacts-list__info">Пн-пт: 09.00 - 19.00</p>
                    <p class="our-contacts-list__info">Сб-нд: 10.00 - 18.00</p>
                </li>
                <li class="our-contacts-list__item our-contacts-list__item_3">
                    <p class="our-contacts-list__heading">Наша адреса:</p>
                    <p class="our-contacts-list__info">м. Київ Набережно-Рибальська дорога, 3, 9</p>
                </li>
            </ul>
        </div>
        
        <div id="get-callback" class="contacts__tab-content contacts__tab-content-2">
            <h3 class="heading contacts__heading">
                Замовити телефонний дзвінок
            </h3>
            <div class="contacts__tab-content-form">
                <form id="contacts-form__callback-form">
                    <div class="contacts-form__callback-input contacts-form__callback-input_name js-input-name-container">
                        <input class="js-input-name" type="text" name="name" placeholder="Ваше ім'я:" data-required="true">
                        <div class="validation-error validation-error_required" style="display: none">Данне поле обов'язкове для заповнення</div>
                        <span class="required-field-icon">*</span>
                    </div>
                    <div class="contacts-form__callback-input contacts-form__callback-input_phone js-input-phone-container">
                        <input class="js-input-phone js-input-phone__international" type="tel" name="phone" placeholder="Ваш телефон:" data-required="true">
                        <div class="validation-error validation-error_required" style="display: none">Данне поле обов'язкове для заповнення</div>
                        <div class="validation-error validation-error_phone-format" style="display: none">Невірний формат телефону</div>
                        <span class="required-field-icon">*</span>
                    </div>
                    <div class="contacts-form__callback-input contacts-form__callback-input_message js-input-message-container">
                        <textarea class="js-input-message" name="message" placeholder="Ваше питання:"></textarea>
                    </div>
                    <input type="submit" value="Відправити" class="contacts__tab-submit-btn">
                </form>
            </div>
        </div>

        <div id="contacts-callback-form" class="contacts__tab-content contacts__tab-content__hidden">
            <h3 class="heading contacts__heading">
                Форма зворотного зв′язку
            </h3>
            <div class="contacts__tab-content-form">
                <form id="contacts-form__email-form">
                    <div class="contacts-form__callback-input contacts-form__callback-input_name js-input-name-container">
                        <input class="js-input-name" type="text" name="name" placeholder="Ваше ім'я:" data-required="true">
                        <div class="validation-error validation-error_required" style="display: none">Данне поле обов'язкове для заповнення</div>
                        <span class="required-field-icon">*</span>
                    </div>
                    <div class="contacts-form__callback-input contacts-form__callback-input_phone js-input-email-container">
                        <input class="js-input-email" type="text" name="email" placeholder="Ваш e-mail:" data-required="true">
                        <div class="validation-error validation-error_required" style="display: none">Данне поле обов'язкове для заповнення</div>
                        <div class="validation-error validation-error_email-format" style="display: none">Невірний формат email</div>
                        <span class="required-field-icon">*</span>
                    </div>
                    <div class="contacts-form__callback-input contacts-form__callback-input_message js-input-message-container">
                        <textarea class="js-input-message" name="message" placeholder="Ваше питання:"></textarea>
                    </div>
                    <input type="submit" value="Відправити" class="contacts__tab-submit-btn">
                </form>
            </div>
        </div>
    
    </div>
</section>