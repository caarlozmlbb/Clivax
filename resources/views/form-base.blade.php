@extends('layouts.master')

@section('title')
    Base
@endsection

@section('topbar-title')
    Forms
@endsection

@section('css')
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header card-header-bordered">
                    <h3 class="card-title">Base</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted">Give textual form controls like <code>&lt;input&gt;</code>s and
                        <code>&lt;textarea&gt;</code>s an upgrade with custom styles, sizing, focus states, and more.
                    </p>
                    <div class="d-grid gap-3">
                        <div>
                            <label for="exampleFormControlInput1" class="form-label">Email address</label> <input
                                type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com" />
                        </div>
                        <div>
                            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header card-header-bordered">
                    <h3 class="card-title">Disabled state</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted">Add the <code>disabled</code> boolean attribute on an input to give it a grayed
                        out appearance and remove pointer events.</p>
                    <div class="d-grid gap-3">
                        <input class="form-control" type="text" placeholder="Disabled input"
                            aria-label="Disabled input example" disabled="disabled" />
                        <input class="form-control" type="text" value="Disabled readonly input"
                            aria-label="Disabled input example" disabled="disabled" readonly="readonly" />
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header card-header-bordered">
                    <h3 class="card-title">Color</h3>
                </div>
                <div class="card-body">
                    <div>
                        <label for="exampleColorInput" class="form-label">Color picker</label>
                        <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c"
                            title="Choose your color" />
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header card-header-bordered">
                    <h3 class="card-title">Select</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted">
                        Custom <code>&lt;select&gt;</code> menus need only a custom class, <code>.form-select</code> to
                        trigger the custom styles. Custom styles are limited to the <code>&lt;select&gt;</code>’s initial
                        appearance and cannot modify the <code>&lt;option&gt;</code>s due to browser limitations.
                    </p>
                    <p class="text-muted">You may also choose from small and large custom selects to match our similarly
                        sized text inputs.</p>
                    <div class="d-grid gap-3">
                        <select class="form-select form-select-lg">
                            <option selected="selected">Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="form-select">
                            <option selected="selected">Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="form-select form-select-sm">
                            <option selected="selected">Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <hr />
                    <p class="text-muted">The <code>multiple</code> attribute is also supported</p>
                    <select class="form-select" multiple="multiple">
                        <option selected="selected">Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <hr />
                    <p class="text-muted">Add the <code>disabled</code> boolean attribute on a select to give it a grayed
                        out appearance and remove pointer events.</p>
                    <select class="form-select" disabled="disabled">
                        <option selected="selected">Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="card">
                <div class="card-header card-header-bordered">
                    <h3 class="card-title">Checkbox and Radio</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted">
                        Browser default checkboxes and radios are replaced with the help of <code>.form-check</code>, a
                        series of classes for both input types that improves the layout and behavior of their HTML elements,
                        that provide greater customization and cross browser consistency. Checkboxes are for selecting one
                        or several options in a list, while radios are for selecting one option from many.
                    </p>
                    <p class="text-muted">Add the <code>disabled</code> attribute and the associated
                        <code>&lt;label&gt;</code>s are automatically styled to match with a lighter color to help indicate
                        the input’s state.
                    </p>
                    <div class="d-grid gap-3">
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckDefault" /> <label class="form-check-label"
                                    for="flexCheckDefault">Default checkbox</label></div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                    checked="checked" /> <label class="form-check-label" for="flexCheckChecked">Checked
                                    checkbox</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled"
                                    disabled="disabled" /> <label class="form-check-label"
                                    for="flexCheckDisabled">Disabled checkbox</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckCheckedDisabled" checked="checked" disabled="disabled" />
                                <label class="form-check-label" for="flexCheckCheckedDisabled">Disabled checked
                                    checkbox</label>
                            </div>
                        </div>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1" /> <label class="form-check-label"
                                    for="flexRadioDefault1">Default radio</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2" checked="checked" />
                                <label class="form-check-label" for="flexRadioDefault2">Default checked radio</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDisabled"
                                    id="flexRadioDisabled" disabled="disabled" />
                                <label class="form-check-label" for="flexRadioDisabled">Disabled radio</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDisabled"
                                    id="flexRadioCheckedDisabled" checked="checked" disabled="disabled" />
                                <label class="form-check-label" for="flexRadioCheckedDisabled">Disabled checked
                                    radio</label>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <p class="text-muted">Group checkboxes or radios on the same horizontal row by adding
                        <code>.form-check-inline</code> to any <code>.form-check</code>.
                    </p>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                            <label class="form-check-label" for="inlineCheckbox1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                            <label class="form-check-label" for="inlineCheckbox2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"
                                disabled="disabled" /> <label class="form-check-label" for="inlineCheckbox3">3
                                (disabled)</label>
                        </div>
                    </div>
                    <hr />
                    <p class="text-muted">Put your checkboxes, radios, and switches on the opposite side with the
                        <code>.form-check-reverse</code> modifier class.
                    </p>
                    <div>
                        <div class="form-check form-check-reverse">
                            <input class="form-check-input" type="checkbox" value="" id="reverseCheck1" /> <label
                                class="form-check-label" for="reverseCheck1">Reverse checkbox</label>
                        </div>
                        <div class="form-check form-check-reverse">
                            <input class="form-check-input" type="checkbox" value="" id="reverseCheck2"
                                disabled="disabled" /> <label class="form-check-label" for="reverseCheck2">Disabled
                                reverse checkbox</label>
                        </div>
                        <div class="form-check form-switch form-check-reverse">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckReverse" /> <label
                                class="form-check-label" for="flexSwitchCheckReverse">Reverse switch checkbox
                                input</label>
                        </div>
                    </div>
                    <hr />
                    <p class="text-muted">Omit the wrapping <code>.form-check</code> for checkboxes and radios that have no
                        label text.</p>
                    <div class="d-grid gap-2">
                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" /> <input
                            class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1"
                            value="" />
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header card-header-bordered">
                    <h3 class="card-title">Switches</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted">A switch has the markup of a custom checkbox but uses the
                        <code>.form-switch</code> class to render a toggle switch. Switches also support the
                        <code>disabled</code> attribute.
                    </p>
                    <hr />
                    <div class="d-grid gap-1">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch"
                                id="flexSwitchCheckDefault" /> <label class="form-check-label"
                                for="flexSwitchCheckDefault">Default switch checkbox input</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                                checked="checked" />
                            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox
                                input</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDisabled"
                                disabled="disabled" />
                            <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox
                                input</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch"
                                id="flexSwitchCheckCheckedDisabled" checked="checked" disabled="disabled" />
                            <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked switch
                                checkbox input</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header card-header-bordered">
                    <h3 class="card-title">Sizing</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted">Set heights using classes like <code>.form-control-lg</code> and
                        <code>.form-control-sm</code>.
                    </p>
                    <div class="d-grid gap-3">
                        <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" />
                        <input class="form-control" type="text" placeholder="Default input" />
                        <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" />
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header card-header-bordered">
                    <h3 class="card-title">Readonly</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted">Add the <code>readonly</code> boolean attribute on an input to prevent
                        modification of the input’s value.</p>
                    <input class="form-control" type="text" value="Readonly input here..." readonly="readonly" />
                </div>
            </div>
            <div class="card">
                <div class="card-header card-header-bordered">
                    <h3 class="card-title">Readonly plain text</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted">
                        If you want to have <code>&lt;input readonly&gt;</code> elements in your form styled as plain text,
                        use the <code>.form-control-plaintext</code> class to remove the default form field styling and
                        preserve the correct margin and padding.
                    </p>
                    <div class="d-grid gap-3">
                        <div class="row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10"><input type="text" readonly="readonly"
                                    class="form-control-plaintext" id="staticEmail" value="email@example.com" /></div>
                        </div>
                        <div class="row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10"><input type="password" class="form-control" id="inputPassword" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header card-header-bordered">
                    <h3 class="card-title">File input</h3>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-3">
                        <div>
                            <label for="formFile" class="form-label">Default file input example</label> <input
                                class="form-control" type="file" id="formFile" />
                        </div>
                        <div>
                            <label for="formFileMultiple" class="form-label">Multiple files input example</label> <input
                                class="form-control" type="file" id="formFileMultiple" multiple="multiple" />
                        </div>
                        <div>
                            <label for="formFileDisabled" class="form-label">Disabled file input example</label> <input
                                class="form-control" type="file" id="formFileDisabled" disabled="disabled" />
                        </div>
                        <div>
                            <label for="formFileSm" class="form-label">Small file input example</label> <input
                                class="form-control form-control-sm" id="formFileSm" type="file" />
                        </div>
                        <div>
                            <label for="formFileLg" class="form-label">Large file input example</label> <input
                                class="form-control form-control-lg" id="formFileLg" type="file" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header card-header-bordered">
                    <h3 class="card-title">Range</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted">
                        Create custom <code>&lt;input type="range"&gt;</code> controls with <code>.form-range</code>. The
                        track (the background) and thumb (the value) are both styled to appear the same across browsers.
                        As only Firefox supports “filling” their track from the left or right of the thumb as a means to
                        visually indicate progress, we do not currently support it.
                    </p>
                    <p class="text-muted">Add the <code>disabled</code> boolean attribute on an input to give it a grayed
                        out appearance and remove pointer events.</p>
                    <div class="d-grid gap-1">
                        <div>
                            <label for="customRange1" class="form-label">Example range</label> <input type="range"
                                class="form-range" id="customRange1" />
                        </div>
                        <div>
                            <label for="disabledRange" class="form-label">Disabled range</label> <input type="range"
                                class="form-range" id="disabledRange" disabled="disabled" />
                        </div>
                    </div>
                    <hr />
                    <p class="text-muted">
                        By default, range inputs “snap” to integer values. To change this, you can specify a
                        <code>step</code> value. In the example below, we double the number of steps by using
                        <code>step="0.5"</code>.
                    </p>
                    <div>
                        <label for="customRange3" class="form-label">Example range</label> <input type="range"
                            class="form-range" min="0" max="5" step="0.5" id="customRange3" />
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header card-header-bordered">
                    <h3 class="card-title">Floating label</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted">
                        Wrap a pair of <code>&lt;input class="form-control"&gt;</code> and <code>&lt;label&gt;</code>
                        elements in <code>.form-floating</code> to enable floating labels with Bootstrap’s textual form
                        fields. A <code>placeholder</code> is required on each <code>&lt;input&gt;</code> as our method of
                        CSS-only floating labels uses the <code>:placeholder-shown</code> pseudo-element. Also note that
                        the <code>&lt;input&gt;</code> must come first so we can utilize a sibling selector (e.g.,
                        <code>~</code>).
                    </p>
                    <p class="text-muted">
                        Other than <code>.form-control</code>, floating labels are only available on
                        <code>.form-select</code>s. They work in the same way, but unlike <code>&lt;input&gt;</code>s,
                        they’ll always show the
                        <code>&lt;label&gt;</code> in its floated state. <strong>Selects with <code>size</code> and
                            <code>multiple</code> are not supported.</strong>
                    </p>
                    <div class="d-grid gap-3">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput"
                                placeholder="name@example.com" /> <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" />
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea> <label for="floatingTextarea">Comments</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                <option selected="selected">Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <label for="floatingSelect">Works with selects</label>
                        </div>
                    </div>
                    <hr />
                    <p class="text-muted">Floating labels also support sizing classes.</p>
                    <div class="d-grid gap-3">
                        <div class="form-floating">
                            <input type="text" id="floatingSizeLarge" class="form-control form-control-lg"
                                placeholder=".form-control-lg" /> <label for="floatingSizeLarge">Large</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" id="floatingSizeNormal" class="form-control"
                                placeholder="no modifier" /> <label for="floatingSizeNormal">Normal</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" id="floatingSizeSmall" class="form-control form-control-sm"
                                placeholder=".form-control-sm" /> <label for="floatingSizeSmall">Small</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection

@section('scripts')
    <!-- bs custom file input plugin -->
    <script src="{{ URL::asset('build/libs/bs-custom-file-input/dist/bs-custom-file-input.min.js') }}"></script>

    <script src="{{ URL::asset('build/js/pages/form-element.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
