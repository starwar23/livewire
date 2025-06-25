<div class="log-in pb-60">
    <div class="container">
        <div class="row">
            <!-- New Customer Start -->
            <div class="col-sm-6">
                <div class="well">
                    <div class="new-customer">
                        <h3>Новый пользователь</h3>
                        <p class="mtb-10"><strong>Регистрация</strong></p>
                        <p>Создав учетную запись, вы сможете быстрее совершать покупки, быть в курсе состояния заказа и отслеживать заказы, которые вы сделали ранее</p>
                        <a class="customer-btn" href="">Продолжить</a>
                    </div>
                </div>
            </div>
            <!-- New Customer End -->
            <!-- Returning Customer Start -->
            <div class="col-sm-6">
                <div class="well">
                    <div class="return-customer">
                        <h3 class="mb-10">Авторизация</h3>
                        <form wire:submit="authUser">
                            <div class="form-group">
                                <label class="control-label">E-mail</label>
                                <input type="email" wire:model="email" id="input-email" class="form-control">
                                @error('email')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label">Пароль</label>
                                <input type="password" wire:model="password" id="input-password" class="form-control">
                                @error('password')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <p class="lost-password"><a href="forgot-password.html">Forgot password?</a></p>
                            <input type="submit" value="Login" class="return-customer-btn">
                        </form>
                    </div>
                </div>
            </div>
            <!-- Returning Customer End -->
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>
