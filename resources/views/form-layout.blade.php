@extends('layouts.master')

@section('title')
    Layout
@endsection

@section('topbar-title')
    Forms
@endsection

@section('css')
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header card-header-bordered">
                    <h3 class="card-title">Basic layout</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted">
                        Every group of form fields should reside in a <code>&lt;form&gt;</code> element. Bootstrap provides
                        no default styling for the <code>&lt;form&gt;</code> element, but there are some powerful
                        browser features that are provided by default.
                    </p>
                    <p class="text-muted">
                        Since Bootstrap applies <code>display: block</code> and <code>width: 100%</code> to almost all our
                        form controls, forms will by default stack vertically. Additional classes can be used to vary
                        this layout on a per-form basis.
                    </p>
                    <p class="text-muted">Feel free to build your forms however you like, with
                        <code>&lt;fieldset&gt;</code>s, <code>&lt;div&gt;</code>s, or nearly any other element.
                    </p>

                    <form class="d-grid gap-3">
                        <div><label for="formGroupExampleInput" class="form-label">Example label</label> <input
                                type="text" class="form-control" id="formGroupExampleInput"
                                placeholder="Example input placeholder" /></div>
                        <div>
                            <label for="formGroupExampleInput2" class="form-label">Another label</label> <input
                                type="text" class="form-control" id="formGroupExampleInput2"
                                placeholder="Another input placeholder" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header card-header-bordered">
                    <h3 class="card-title">Horizontal form</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted">
                        Create horizontal forms with the grid by adding the <code>.row</code> class to form groups and using
                        the <code>.col-*-*</code> classes to specify the width of your labels and controls. Be sure to
                        add <code>.col-form-label</code> to your <code>&lt;label&gt;</code>s as well so they’re vertically
                        centered with their associated form controls.
                    </p>
                    <p class="text-muted">
                        At times, you maybe need to use margin or padding utilities to create that perfect alignment you
                        need. For example, we’ve removed the <code>padding-top</code> on our stacked radio inputs label to
                        better align the text baseline.
                    </p>
                    <form class="d-grid gap-3">
                        <div class="row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10"><input type="email" class="form-control" id="inputEmail3" /></div>
                        </div>
                        <div class="row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10"><input type="password" class="form-control" id="inputPassword3" /></div>
                        </div>
                        <fieldset class="row">
                            <label class="col-form-label col-sm-2 pt-0">Radios</label>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                        value="option1" checked="checked" />
                                    <label class="form-check-label" for="gridRadios1">First radio</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                        value="option2" /> <label class="form-check-label" for="gridRadios2">Second
                                        radio</label>
                                </div>
                                <div class="form-check disabled">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3"
                                        value="option3" disabled="disabled" />
                                    <label class="form-check-label" for="gridRadios3">Third disabled radio</label>
                                </div>
                            </div>
                        </fieldset>
                        <div class="row">
                            <div class="col-sm-10 offset-sm-2">
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="gridCheck1" />
                                    <label class="form-check-label" for="gridCheck1">Example checkbox</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10 offset-sm-2"><button type="submit" class="btn btn-primary">Sign
                                    in</button></div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header card-header-bordered">
                    <h3 class="card-title">Horizontal form sizing</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted">
                        Be sure to use <code>.col-form-label-sm</code> or <code>.col-form-label-lg</code> to your
                        <code>&lt;label&gt;</code>s or <code>&lt;legend&gt;</code>s to correctly follow the size of
                        <code>.form-control-lg</code> and <code>.form-control-sm</code>.
                    </p>

                    <form class="d-grid gap-3">
                        <div class="row">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                            <div class="col-sm-10"><input type="email" class="form-control form-control-sm"
                                    id="colFormLabelSm" placeholder="col-form-label-sm" /></div>
                        </div>
                        <div class="row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10"><input type="email" class="form-control" id="colFormLabel"
                                    placeholder="col-form-label" /></div>
                        </div>
                        <div class="row">
                            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                            <div class="col-sm-10"><input type="email" class="form-control form-control-lg"
                                    id="colFormLabelLg" placeholder="col-form-label-lg" /></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header card-header-bordered">
                    <h3 class="card-title">Form grid</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted">More complex forms can be built using our grid classes. Use these for form
                        layouts that require multiple columns, varied widths, and additional alignment options.</p>

                    <form class="row g-3">
                        <div class="col-md-6"><label for="inputEmail4" class="form-label">Email</label> <input
                                type="email" class="form-control" id="inputEmail4" /></div>
                        <div class="col-md-6"><label for="inputPassword4" class="form-label">Password</label> <input
                                type="password" class="form-control" id="inputPassword4" /></div>
                        <div class="col-12"><label for="inputAddress" class="form-label">Address</label> <input
                                type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" />
                        </div>
                        <div class="col-12"><label for="inputAddress2" class="form-label">Address 2</label> <input
                                type="text" class="form-control" id="inputAddress2"
                                placeholder="Apartment, studio, or floor" /></div>
                        <div class="col-md-6"><label for="inputCity" class="form-label">City</label> <input
                                type="text" class="form-control" id="inputCity" /></div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">State</label>
                            <select id="inputState" class="form-select">
                                <option selected="selected">Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-2"><label for="inputZip" class="form-label">Zip</label> <input type="text"
                                class="form-control" id="inputZip" /></div>
                        <div class="col-12">
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="gridCheck" />
                                <label class="form-check-label" for="gridCheck">Check me out</label>
                            </div>
                        </div>
                        <div class="col-12"><button type="submit" class="btn btn-primary">Sign in</button></div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header card-header-bordered">
                    <h3 class="card-title">Column sizing</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted">
                        As shown in the previous examples, our grid system allows you to place any number of
                        <code>.col</code>s within a <code>.row</code>. They’ll split the available width equally between
                        them. You may
                        also pick a subset of your columns to take up more or less space, while the remaining
                        <code>.col</code>s equally split the rest, with specific column classes like <code>.col-sm-7</code>.
                    </p>

                    <form class="row g-3">
                        <div class="col-sm-7"><input type="text" class="form-control" placeholder="City"
                                aria-label="City" /></div>
                        <div class="col-sm"><input type="text" class="form-control" placeholder="State"
                                aria-label="State" /></div>
                        <div class="col-sm"><input type="text" class="form-control" placeholder="Zip"
                                aria-label="Zip" /></div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header card-header-bordered">
                    <h3 class="card-title">Auto-sizing</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted">
                        The example below uses a flexbox utility to vertically center the contents and changes
                        <code>.col</code> to <code>.col-auto</code> so that your columns only take up as much space as
                        needed. Put
                        another way, the column sizes itself based on the contents.
                    </p>

                    <form class="row gx-3 gy-2 align-items-center">
                        <div class="col-sm-3"><label class="visually-hidden" for="specificSizeInputName">Name</label>
                            <input type="text" class="form-control" id="specificSizeInputName"
                                placeholder="Jane Doe" />
                        </div>
                        <div class="col-sm-3">
                            <label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>
                            <div class="input-group">
                                <div class="input-group-text">@</div>
                                <input type="text" class="form-control" id="specificSizeInputGroupUsername"
                                    placeholder="Username" />
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label class="visually-hidden" for="specificSizeSelect">Preference</label>
                            <select class="form-select" id="specificSizeSelect">
                                <option selected="selected">Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-auto">
                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                                    id="autoSizingCheck2" /> <label class="form-check-label"
                                    for="autoSizingCheck2">Remember me</label></div>
                        </div>
                        <div class="col-auto"><button type="submit" class="btn btn-primary">Submit</button></div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header card-header-bordered">
                    <h3 class="card-title">Inline forms</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted">
                        Use the <code>.row-cols-*</code> classes to create responsive horizontal layouts. By adding gutter
                        modifier classes, we’ll have gutters in horizontal and vertical directions. On narrow mobile
                        viewports, the <code>.col-12</code> helps stack the form controls and more. The
                        <code>.align-items-center</code> aligns the form elements to the middle, making the
                        <code>.form-checkbox</code> align properly.
                    </p>

                    <form class="row row-cols-lg-auto g-3 align-items-center">
                        <div class="col-12">
                            <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
                            <div class="input-group">
                                <div class="input-group-text">@</div>
                                <input type="text" class="form-control" id="inlineFormInputGroupUsername"
                                    placeholder="Username" />
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
                            <select class="form-select" id="inlineFormSelectPref">
                                <option selected="selected">Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <div class="form-check mb-lg-0"><input class="form-check-input" type="checkbox"
                                    id="inlineFormCheck" /> <label class="form-check-label"
                                    for="inlineFormCheck">Remember me</label></div>
                        </div>
                        <div class="col-12"><button type="submit" class="btn btn-primary">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection

@section('scripts')
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
