@extends('layouts.master')

@section('title')
    Modals
@endsection

@section('topbar-title')
    Elements
@endsection

@section('css')
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header card-header-bordered">
                    <h3 class="card-title">Modal examples</h3>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-3">
                        <div class="row">
                            <label class="col-sm-4 col-lg-2 col-form-label">Basic demo</label>
                            <div class="col-sm-8 col-lg-10">
                                <div class="mb-2">
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal1">Click
                                        me</button>
                                </div>
                                <p class="text-muted mb-0">You must add <code>data-bs-toggle="modal"</code> and set
                                    <code>data-bs-target</code> attributes to initialize modal trigger
                                </p>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row">
                            <label class="col-sm-4 col-lg-2 col-form-label">Without footer</label>
                            <div class="col-sm-8 col-lg-10">
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal2">Click
                                    me</button>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row">
                            <label class="col-sm-4 col-lg-2 col-form-label">Static backdrop</label>
                            <div class="col-sm-8 col-lg-10">
                                <div class="mb-2">
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal3">Click
                                        me</button>
                                </div>
                                <p class="text-muted mb-0">Disable backdrop behavior (don't close modal when backdrop
                                    clicked)</p>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row">
                            <label class="col-sm-4 col-lg-2 col-form-label">Scrolling modal</label>
                            <div class="col-sm-8 col-lg-10">
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal4">Click
                                    me</button>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row">
                            <label class="col-sm-4 col-lg-2 col-form-label">Fixed scrollable content</label>
                            <div class="col-sm-8 col-lg-10">
                                <div class="mb-2">
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal5">Click
                                        me</button>
                                </div>
                                <p class="text-muted mb-0">Apply <code>.modal-dialog-scrollable</code> to make modal body
                                    fixed and scrollable</p>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row">
                            <label class="col-sm-4 col-lg-2 col-form-label">Vertically centered</label>
                            <div class="col-sm-8 col-lg-10">
                                <div class="mb-2"><button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#modal6">Click me</button></div>
                                <p class="text-muted mb-0">Make your modal align center to page by applying
                                    <code>.modal-dialog-centered</code>
                                </p>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row">
                            <label class="col-sm-4 col-lg-2 col-form-label">Tooltips and popovers</label>
                            <div class="col-sm-8 col-lg-10">
                                <div class="mb-2"><button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#modal7">Click me</button></div>
                                <p class="text-muted mb-0"><a href="../../elements/base/tooltip.html">Tooltips</a> and <a
                                        href="../../elements/base/popover.html">popovers</a> can be placed within modals as
                                    needed. When modals are closed, any tooltips and popovers within are also automatically
                                    dismissed.</p>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row">
                            <label class="col-sm-4 col-lg-2 col-form-label">Form in modal</label>
                            <div class="col-sm-8 col-lg-10">
                                <div class="mb-2"><button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#modal8">Click me</button></div>
                                <p class="text-muted mb-0">You can insert any elements to modal body</p>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row">
                            <label class="col-sm-4 col-lg-2 col-form-label">Toggle between modals</label>
                            <div class="col-sm-8 col-lg-10">
                                <div class="mb-2"><button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#modal9">Click me</button></div>
                                <p class="text-muted mb-0">Toggle between multiple modals with some clever placement of the
                                    <code>data-bs-target</code> and <code>data-bs-toggle</code> attributes.
                                </p>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row">
                            <label class="col-sm-4 col-lg-2 col-form-label">Fullscreen modal</label>
                            <div class="col-sm-8 col-lg-10">
                                <div class="mb-2"><button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#modal11">Click me</button></div>
                                <p class="text-muted mb-0">Another override is the option to pop up a modal that covers the
                                    user viewport, available via modifier classes that are placed on a
                                    <code>.modal-dialog</code>.
                                </p>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <!-- Modal 1 -->
    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal1Label">Basic</h5>
                    <button type="button" class="btn btn-sm btn-label-danger btn-icon" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="mdi mdi-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate fugit
                        eveniet sed, ipsum rem quasi quisquam recusandae nesciunt deleniti iste sit repellat rerum amet.
                        Neque debitis iste, quos repudiandae ut!</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary">Submit</button>
                    <button class="btn btn-outline-danger">Reset</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2Label"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal2Label">Without footer</h5>
                    <button type="button" class="btn btn-sm btn-label-danger btn-icon" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="mdi mdi-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate fugit
                        eveniet sed, ipsum rem quasi quisquam recusandae nesciunt deleniti iste sit repellat rerum amet.
                        Neque debitis iste, quos repudiandae ut!</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3 -->
    <div class="modal fade" id="modal3" data-bs-backdrop="static" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal3Label">Static backdrop</h5>
                    <button type="button" class="btn btn-sm btn-label-danger btn-icon" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="mdi mdi-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate fugit
                        eveniet sed, ipsum rem quasi quisquam recusandae nesciunt deleniti iste sit repellat rerum amet.
                        Neque debitis iste, quos repudiandae ut!</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary">Submit</button>
                    <button class="btn btn-outline-danger">Reset</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 4 -->
    <div class="modal fade" id="modal4" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Scrollable</h5>
                    <button type="button" class="btn btn-sm btn-label-danger btn-icon" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="mdi mdi-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                        eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                        laoreet rutrum faucibus dolor auctor.</p>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                        consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                        eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                        laoreet rutrum faucibus dolor auctor.</p>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                        consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                        eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                        laoreet rutrum faucibus dolor auctor.</p>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                        consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                        eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                        laoreet rutrum faucibus dolor auctor.</p>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                        consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                        eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                        laoreet rutrum faucibus dolor auctor.</p>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                        consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    <p class="text-muted mb-0">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus
                        ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                    </p>
                </div>
                <div class="modal-footer"><button class="btn btn-primary">Submit</button> <button
                        class="btn btn-outline-danger">Reset</button></div>
            </div>
        </div>
    </div>

    <!-- Modal 5 -->
    <div class="modal fade" id="modal5">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Fixed scrollable content</h5>
                    <button type="button" class="btn btn-sm btn-label-danger btn-icon" data-bs-dismiss="modal">
                        <i class="mdi mdi-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                        eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                        laoreet rutrum faucibus dolor auctor.</p>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                        consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                        eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                        laoreet rutrum faucibus dolor auctor.</p>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                        consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                        eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                        laoreet rutrum faucibus dolor auctor.</p>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                        consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                        eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                        laoreet rutrum faucibus dolor auctor.</p>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                        consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                        eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                        laoreet rutrum faucibus dolor auctor.</p>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                        consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    <p class="text-muted mb-0">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus
                        ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary">Submit</button>
                    <button class="btn btn-outline-danger">Reset</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 6 -->
    <div class="modal fade" id="modal6">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Vertical centered</h5><button type="button"
                        class="btn btn-sm btn-label-danger btn-icon" data-bs-dismiss="modal"><i
                            class="mdi mdi-close"></i></button>
                </div>
                <div class="modal-body">
                    <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate fugit
                        eveniet sed, ipsum rem quasi quisquam recusandae nesciunt deleniti iste sit repellat rerum amet.
                        Neque debitis iste, quos repudiandae ut!</p>
                </div>
                <div class="modal-footer"><button class="btn btn-primary">Submit</button> <button
                        class="btn btn-outline-danger">Reset</button></div>
            </div>
        </div>
    </div>

    <!-- Modal 7 -->
    <div class="modal fade" id="modal7">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tooltips and popovers</h5><button type="button"
                        class="btn btn-sm btn-label-danger btn-icon" data-bs-dismiss="modal"><i
                            class="mdi mdi-close"></i></button>
                </div>
                <div class="modal-body">
                    <h2 class="fs-5">Popover in a modal</h2>
                    <p>This <button class="btn btn-secondary" data-bs-toggle="popover"
                            data-bs-content="Popover body content is set in this attribute."
                            data-bs-original-title="Popover title">button</button> triggers a popover on click.</p>
                    <hr>
                    <h2 class="fs-5">Tooltips in a modal</h2>
                    <p><a href="#" data-bs-toggle="tooltip" data-bs-original-title="Tooltip">This link</a> and <a
                            href="#" data-bs-toggle="tooltip" data-bs-original-title="Tooltip">that link</a> have
                        tooltips on hover.</p>
                </div>
                <div class="modal-footer"><button class="btn btn-primary">Submit</button> <button
                        class="btn btn-outline-danger">Reset</button></div>
            </div>
        </div>
    </div>

    <!-- Modal 8 -->
    <div class="modal fade" id="modal8">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form</h5><button type="button" class="btn btn-sm btn-label-danger btn-icon"
                        data-bs-dismiss="modal"><i class="mdi mdi-close"></i></button>
                </div>
                <div class="modal-body">
                    <div><label class="form-label" for="email">Email form</label> <input class="form-control"
                            id="email" type="email"> <small class="form-text">Please submit your email</small>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-primary">Submit</button> <button
                        class="btn btn-outline-danger">Reset</button></div>
            </div>
        </div>
    </div>

    <!-- Modal 9 -->
    <div class="modal fade" id="modal9">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal 1</h5><button type="button"
                        class="btn btn-sm btn-label-danger btn-icon" data-bs-dismiss="modal"><i
                            class="mdi mdi-close"></i></button>
                </div>
                <div class="modal-body">Show a second modal and hide this one with the button below.</div>
                <div class="modal-footer"><button class="btn btn-primary" data-bs-target="#modal10"
                        data-bs-toggle="modal">Open second modal</button></div>
            </div>
        </div>
    </div>

    <!-- Modal 10 -->
    <div class="modal fade" id="modal10">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal 2</h5><button type="button"
                        class="btn btn-sm btn-label-danger btn-icon" data-bs-dismiss="modal"><i
                            class="mdi mdi-close"></i></button>
                </div>
                <div class="modal-body">Hide this modal and show the first with the button below.</div>
                <div class="modal-footer"><button class="btn btn-primary" data-bs-target="#modal9"
                        data-bs-toggle="modal">Back to first</button></div>
            </div>
        </div>
    </div>

    <!-- Modal 11 -->
    <div class="modal fade" id="modal11">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Full screen modal</h5><button type="button"
                        class="btn btn-sm btn-label-danger btn-icon" data-bs-dismiss="modal"><i
                            class="mdi mdi-close"></i></button>
                </div>
                <div class="modal-body">...</div>
                <div class="modal-footer"><button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
