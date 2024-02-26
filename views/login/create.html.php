<div class="container">
    <div class="col-md-5 mx-auto mt-5 mb-4">
        <h4>New here?</h4>
        <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
        <form class="pt-3">
            <div class="form-group">
                <input type="text" class="form-control " name="Username" id="Username" placeholder="Veillez votre Nom">
                <small id="passwordConfirm" class="form-text text-muted">
                    <span id="messageUser"></span>
                </small>
            </div>
            <div class="form-group">
                <input type="text" class="form-control " name="LastName" id="LastName" placeholder="Veillez votre Post-Nom">
                <small id="passwordConfirm" class="form-text text-muted">
                    <span id="messageLast"></span>
                </small>
            </div>
            <div class="form-group">
                <input type="text" class="form-control " name="FirstName" id="FirstName" placeholder="Veillez votre Prénom">
                <small id="passwordConfirm" class="form-text text-muted">
                    <span id="messageFirst"></span>
                </small>
            </div>
            <div class="form-group">
                <select class="form-control " name="Genre" id="Genre">
                    <option>Genre</option>
                    <option value="M">Masculin</option>
                    <option value="F">Féminin</option>
                </select>
                <small id="passwordConfirm" class="form-text text-muted">
                    <span id="messageGenre"></span>
                </small>
            </div>
            <div class="form-group">
                <input type="email" class="form-control " name="Email" id="Email" placeholder="Veillez votre Email">
                <small id="passwordConfirm" class="form-text text-danger">
                    <span id="messageEmail"></span>
                </small>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <select class="form-control" name="Ecoles" id="Ecoles">
                            <option>Ecoles</option>
                            <option>Institut Mwanga</option>
                            <option>Institut Faraja</option>
                            <option>Institut Maendelo</option>
                            <option>Institut Mont-Carmel</option>
                            <option>Institut de Goma</option>
                        </select>
                        <small id="passwordConfirm" class="form-text text-muted">
                            <span id="messageClasse"></span>
                        </small>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <select class="form-control" name="Options" id="Options">
                            <option>Options</option>
                            <option>Commercial</option>
                            <option>Scientifique</option>
                            <option>Eléctronique</option>
                            <option>Mécanique</option>
                            <option>Construction</option>
                        </select>
                        <small id="passwordConfirm" class="form-text text-muted">
                            <span id="messageOption"></span>
                        </small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <input type="password" class="form-control" name="Password" id="Password" placeholder="Mot de Passe" aria-describedby="passwordHelp">
                        <small id="passwordHelp" class="form-text text-danger">
                            <span id="messagePass"></span>
                        </small>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <input type="password" class="form-control" name="ConfirmPassword" id="ConfirmPassword" placeholder="Confirmer Mot de Passe" aria-describedby="passwordConfirm">
                        <small id="passwordConfirm" class="form-text text-muted">
                            <span id="messageConfirm"></span>
                        </small>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <div class="form-check">
                    <label class="form-check-label text-muted">
                        <input type="checkbox" name="termContrat" value="ok" id="termContrat" class="form-check-input">
                        I agree to all Terms & Conditions
                    </label>
                </div>
            </div>
            <div class="mt-3">
                <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" id="authForm" type="submit">S'INSCRIRE</button>
            </div>
            <div class="text-center mt-4 font-weight-light">
                Already have an account? <a href="login.html" class="text-primary">Login</a>
            </div>
        </form>
    </div>
</div>