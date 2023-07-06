<form action="">
    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6">
            <div class="row">
                <div class="col">
                    @includeUnless(empty($companies), 'contacts._company')
                </div>
                <div class="col">
                    <div class="input-group mb-3">
                        <input type="text" id="txt_search" name="search" class="form-control"
                            aria-describedby="button-addon2" placeholder="Search..." aria-label="Search..."
                            value="{{ request()->query('search') }}">
                        <div class="input-group-append">
                            @if(request()->filled('search') || request()->filled('company_id'))
                            <button type="button" class="btn btn-outline-secondary mx-0" style="color: orangered;"
                                onclick="document.getElementById('txt_search').value = '',
                                document.getElementById('drp_company').selectedIndex = '', this.form.submit()">
                                <i class=" bi bi-arrow-clockwise"></i>
                            </button>
                            @endif
                            <button type="submit" class="btn btn-outline-secondary" style="color: orangered;"
                                id="button-addon2">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</form>