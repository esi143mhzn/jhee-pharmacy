
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <input type="text" name="first_name" class="form-control form-control-user" id="firstName" placeholder="First Name" value="{{ isset($users) ? $users->first_name : '' }}" required>
        </div>
        <div class="col-sm-6">
            <input type="text" name="last_name" class="form-control form-control-user" id="lastName" placeholder="Last Name" value="{{ isset($users) ? $users->last_name : '' }}" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <input type="email" name="email" class="form-control form-control-user" id="inputEmail" placeholder="Email Address" value="{{ isset($users) ? $users->email : '' }}" required>
        </div>
        <div class="col-sm-6">
            <select name="role_id" class="form-control form-control-user" required>
                <option value="" disabled selected>-- User Role --</option>
                @foreach($roles as $role)
                    <option {{ isset($users) && $users->role_id == $role->id ? 'selected' : ''}} value="{{ $role->id }}">{{ $role->type }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <input type="password" name="password" class="form-control form-control-user"
                id="inputPassword" placeholder="Password">
        </div>
        <div class="col-sm-6">
            <input type="password" name="repeat_password" class="form-control form-control-user"
                id="repeatPassword" placeholder="Repeat Password">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <input type="text" name="mobile_no" class="form-control form-control-user" id="mobileNumber" placeholder="Mobile Number" value="{{ isset($users) ? $users->mobile_no : '' }}" required>
        </div>
        <div class="col-sm-6">
            <input type="text" name="address" class="form-control form-control-user" id="address"
                placeholder="Address" value="{{ isset($users) ? $users->address : '' }}" required>
        </div>
    </div>
