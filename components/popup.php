<div class="modal fade ticket-modal" id="ticketModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L33 33" stroke="white" stroke-width="2"/>
                        <path d="M33 1L1 33" stroke="white" stroke-width="2"/>
                    </svg>
                </button>
                <h4 class="modal-title" id="myModalLabel">Пакет <span class="pac-name"></span></h4>
            </div>
            <div class="modal-body">
                <form role="form" data-toggle="validator" method="post" id="go-pay-form" action="https://tickets.ikra.in/mtickets/?id=99">
                    <div class="form-group inp-name has-feedback">
                        <label for="q-name">Ім’я</label>
                        <input type="text" class="form-control" name="name" id="q-name" placeholder="Введіть ваше ім’я" required>
                    </div>
                    <div class="form-group inp-phone has-feedback">
                        <label for="q-tel">Телефон</label>
                        <input type="tel" class="form-control" name="phone" id="q-tel" placeholder="Введіть ваш телефон" required>
                    </div>
                    <div class="form-group inp-email has-feedback">
                        <label for="q-email">Email</label>
                        <input type="email" class="form-control" name="email" id="q-email" placeholder="Введіть ваш email" required>
                    </div>
                    <div class="master-custom">
                        <p>Будь ласка, оберіть потік майстер-класу:</p>
                        <label class="radio">
                            <input type="radio" name="flowName" value="Потік №1" />
                            <div class="radio__text">Потік №1. Transformation Sessions: Industries</div>
                        </label>
                        <label class="radio">
                            <input type="radio" name="flowName" value="Потік №2" />
                            <div class="radio__text">Потік №2. Transformation Sessions: Functions</div>
                        </label>
                    </div>
                    <input type="hidden" name="package" value="">
                    <input type="hidden" name="lid-name" value="Переход на оплату">
                    <button type="submit" class="button">Залишити заявку</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade ticket-modal" id="ticketModalBooking" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L33 33" stroke="white" stroke-width="2"/>
                        <path d="M33 1L1 33" stroke="white" stroke-width="2"/>
                    </svg>
                </button>
                <h4 class="modal-title" id="myModalLabel">Пакет <span class="pac-name"></span></h4>
            </div>
            <div class="modal-body">
                <form role="form" data-toggle="validator" method="post" action="send.php">
                    <div class="form-group inp-name has-feedback">
                        <label for="q-name">Ім’я</label>
                        <input type="text" class="form-control" name="name" id="q-name" placeholder="Введіть ваше ім’я" required>
                    </div>
                    <div class="form-group inp-phone has-feedback">
                        <label for="q-tel">Телефон</label>
                        <input type="tel" class="form-control" name="phone" id="q-tel" placeholder="Введіть ваш телефон" required>
                    </div>
                    <div class="form-group inp-email has-feedback">
                        <label for="q-email">Email</label>
                        <input type="email" class="form-control" name="email" id="q-email" placeholder="Введіть ваш email" required>
                    </div>
                    <div class="master-custom">
                        <p>Будь ласка, оберіть потік майстер-класу:</p>
                        <label class="radio">
                            <input type="radio" name="flowName" value="Потік №1" />
                            <div class="radio__text">Потік №1. Transformation Sessions: Industries</div>
                        </label>
                        <label class="radio">
                            <input type="radio" name="flowName" value="Потік №2" />
                            <div class="radio__text">Потік №2. Transformation Sessions: Functions</div>
                        </label>
                    </div>
                    <input type="hidden" name="package" value="">
                    <input type="hidden" name="lid-name" value="Забронировать место">
                    <button type="submit" class="button">Залишити заявку</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade ticket-modal" id="SP-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L33 33" stroke="white" stroke-width="2"/>
                        <path d="M33 1L1 33" stroke="white" stroke-width="2"/>
                    </svg>
                </button>
                <h4 class="modal-title" id="myModalLabel"><span class="pac-name"></span></h4>
            </div>
            <div class="modal-body">
                <form role="form" data-toggle="validator" method="post" action="send.php" >
                    <div class="form-group inp-name has-feedback">
                        <label for="q-name">Ім’я</label>
                        <input type="text" class="form-control" name="name" id="q-name" placeholder="Введіть ваше ім’я" required>
                    </div>
                    <div class="form-group inp-phone has-feedback">
                        <label for="q-tel">Телефон</label>
                        <input type="tel" class="form-control" name="phone" id="q-tel" placeholder="Введіть ваш телефон" required>
                    </div>
                    <div class="form-group inp-email has-feedback">
                        <label for="q-email">Email</label>
                        <input type="email" class="form-control" name="email" id="q-email" placeholder="Введіть ваш email" required>
                    </div>

                    <input type="hidden" name="lid-name" value="Стать спонсором">
                    <button type="submit" class="button">Відправити</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade ticket-modal" id="SP-modal-2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L33 33" stroke="white" stroke-width="2"/>
                        <path d="M33 1L1 33" stroke="white" stroke-width="2"/>
                    </svg>
                </button>
                <h4 class="modal-title" id="myModalLabel"><span class="pac-name"></span></h4>
            </div>
            <div class="modal-body">
                <form role="form" data-toggle="validator" method="post" action="send.php" >
                    <div class="form-group inp-name has-feedback">
                        <label for="q-name">Ім’я</label>
                        <input type="text" class="form-control" name="name" id="q-name" placeholder="Введіть ваше ім’я" required>
                    </div>
                    <div class="form-group inp-phone has-feedback">
                        <label for="q-tel">Телефон</label>
                        <input type="tel" class="form-control" name="phone" id="q-tel" placeholder="Введіть ваш телефон" required>
                    </div>
                    <div class="form-group inp-email has-feedback">
                        <label for="q-email">Email</label>
                        <input type="email" class="form-control" name="email" id="q-email" placeholder="Введіть ваш email" required>
                    </div>
                    <input type="hidden" name="teg" value="">
                    <input type="hidden" name="lid-name" value="Стать партнером">
                    <button type="submit" class="button">Відправити</button>
                </form>
            </div>
        </div>
    </div>
</div>