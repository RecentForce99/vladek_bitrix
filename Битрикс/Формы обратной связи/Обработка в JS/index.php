   <form class="pop-up__form feedback-advanced-ajax">
                <div class="pop-up__title-box">
                    <div class="pop-up__title">Написать нам</div>
                </div>
                <input type="hidden" name="URL" value="<?=$APPLICATION->GetCurPage()?>">
                <div class="pop-up__error feedback-advanced errortext-name">Имя должно быть длиннее.</div>
                <label class="pop-up__label">
                    <input required name="NAME" placeholder="Ваше имя" type="text" class="pop-up__input">
                </label>
                <div class="pop-up__error feedback-advanced errortext-phone">Номер телефона должен быть не менее 10 символов.</div>
                <label class="pop-up__label">
                    <input required name="PHONE" placeholder="Ваш телефон" type="tel" class="pop-up__input">
                </label>
                <label class="pop-up__label">
                    <input required name="EMAIL" placeholder="Ваш e-mail" type="email" class="pop-up__input">
                </label>
                <label class="pop-up__label pop-up__label--textarea">
                    <textarea name="MESSAGE" placeholder="Введите сообщение" class="pop-up__textarea"></textarea>
                </label>
                <div class="pop-up__btn-box">
                    <button type="submit" class="pop-up__btn complete">
                        <span>Написать нам</span>
                        <span class="pop-up__btn-icon">
                            <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.83333 1.33398L6 5.50065L1.83333 9.66732" stroke="#0199E4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </button>
                    <div class="pop-up__personal-data">
                        При нажании на «Отправить» вы согласие на обработку персональных данных
                    </div>
                </div>
            </form>
