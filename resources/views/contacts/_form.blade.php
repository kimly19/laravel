<!-- <div class="card-body"> -->

<div class="row">
    <div class="col-md-12">
        <div class="row mb-3">
            <label for="first_name" class="col-form-label col-md-3">First Name</label>
            <div class="col-md-9">
                <input name="first_name" id="first_name" class="form-control @error('first_name') is-invalid @enderror"
                    type="text" value="{{ old('first_name', isset($contact) ? $contact->first_name : '') }}">
                @error('first_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="last_name" class="col-form-label col-md-3">Last Name</label>
            <div class="col-md-9">
                <input name="last_name" id="last_name" class="form-control @error('last_name') is-invalid @enderror"
                    type="text" value="{{ old('last_name', isset($contact) ? $contact->last_name : '') }}">
                @error('last_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="email" class="col-form-label col-md-3">Email</label>
            <div class="col-md-9">
                <input name="email" id="email" class="form-control @error('email') is-invalid @enderror" type="text"
                    value="{{ old('email', isset($contact) ? $contact->email : '') }}">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="phone" class="col-form-label col-md-3">Phone Number</label>
            <div class="col-md-9">
                <input name="phone" id="phone" class="form-control" type="text"
                    value="{{ old('phone', isset($contact) ? $contact->phone : '') }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="address" class="col-form-label col-md-3">Address</label>
            <div class="col-md-9">
                <textarea name="address" id="address" rows="3"
                    class="form-control">{{ old('address', isset($contact) ? $contact->address : '') }}</textarea>
            </div>
        </div>
        <div class="row mb-3">
            <label for="company_id" class="col-form-label col-md-3">Company</label>
            <div class="col-md-9">
                <select class="form-select form-control @error('company_id') is-invalid @enderror" name="company_id"
                    id="company_id">
                    <option value="" selected>Select Company</option>
                    @foreach($companies as $id => $company)
                    <option value="{{ $id }}" @selected($id==old('company_id', isset($contact) ? $contact->company_id :
                        ''))>{{ $company }}
                    </option>
                    @endforeach
                    <!-- <option>Select Company</option>
                    <option value="1">Company One</option>
                    <option value="2">Company Two</option>
                    <option value="3">Company Three</option> -->
                </select>
                @error('company_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <hr>
        <div class="row mb-3">
            <div class="col-md-9 offset-md-3">
                <button type="submit" class="btn btn-outline-light"
                    style="color: orangered;">{{ isset($contact->exists) ? "Update":"Save" }}</button>
                <a name="" id="" class="btn btn-outline-secondary" href="{{ route('contacts.index') }}"
                    role="button">Cancel</a>
            </div>
        </div>
    </div>
</div>
<!-- </div> -->