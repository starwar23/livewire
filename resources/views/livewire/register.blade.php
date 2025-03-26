<div class="register-account pb-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="register-title">
                    <h3 class="mb-10">Регистрация</h3>
                    <p class="mb-10">Если у вас уже есть учетная запись на нашем сайте, пожалуйста, войдите в систему на странице входа.</p>
                </div>
            </div>
        </div>
        <!-- Row End -->
        <div class="row">
            <div class="col-sm-12">
                <form class="form-horizontal" wire:submit="register">
                    <fieldset>
                        <legend>Ваши личные данные</legend>
                        <div class="form-group">
                            <label class="control-label" for="f-name"><span class="require">*</span>Имя</label>
                            <div class="col-sm-10">
                                <input type="text" wire:model="name" class="form-control" id="f-name">
                                @error('name')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="email"><span class="require">*</span>Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" wire:model="email">
                                @error('email')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Ваш пароль</legend>
                        <div class="form-group">
                            <label class="control-label" for="pwd"><span class="require">*</span>Пароль:</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="pwd" wire:model="password">
                                @error('password')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="pwd-confirm"><span class="require">*</span>Повторите пароль</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="pwd-confirm" wire:model="password_confirmation">
                                @error('password_confirmation')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </fieldset>
                    <div class="buttons newsletter-input">
                        <div class="pull-right">Я прочитал и согласен c <a href="#" class="agree"><b>политикой конфиденциальности</b></a>
                            <input type="checkbox" wire:model="agree" value="1"> &nbsp;
                            <input type="submit" value="Отправить" class="newsletter-btn">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>
