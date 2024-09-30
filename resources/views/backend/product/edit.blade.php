@extends('backend.master')

@section('content')
    <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Add New Product</h3>
            </div>
            <!-- /.card-header -->
            <form action="{{ url('/admin/update-product/' . $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Product Name*</label>
                                <input type="text" name="name" value="{{ $product->name }}" class="form-control"
                                    placeholder="Enter product name*" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Product sku Code*</label>
                                <input type="text" name="sku_code" value="{{ $product->sku_code }}" class="form-control"
                                    placeholder="Enter product sku_code*" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Select Catagory</label>
                                <select class="form-control select2" style="width: 100%;" name="cat_id">
                                    <option selected disabled>Select Catagory</option>
                                    @foreach ($catagories as $catagory)
                                        <option value="{{ $catagory->id }}"
                                            @if ($product->cat_id == $catagory->id) selected @endif>{{ $catagory->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Select Sub-Catagory</label>
                                <select class="form-control select2" style="width: 100%;" name="sub_cat_id">
                                    <option selected disabled>Select Sub Catagory</option>
                                    @foreach ($subCatagories as $subCatagory)
                                        <option value="{{ $subCatagory->id }}"
                                            @if ($product->sub_cat_id == $subCatagory->id) selected @endif()>{{ $subCatagory->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group" id="color_fields">
                                <label>Product Color(Optional)</label>
                                @foreach ($product->color as $colorName)
                                    <input type="text" name="color[]" value="{{ $colorName->color_name }}" id="color"
                                        class="form-control" placeholder="Enter product Color">
                                @endforeach
                            </div>
                            <button type="button" class="btn btn-primary" id="add_color">Add More</button>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group" id="size_fields">
                                <label>Product Size(Optional)</label>
                                @foreach ($product->size as $sizeName)
                                    <input type="text" name="size[]" value="{{ $sizeName->size_name }}" id="size"
                                        class="form-control" placeholder="Enter product Size">
                                @endforeach
                            </div>
                            <button type="button" class="btn btn-primary" id="add_size">Add More</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Product Quantity*</label>
                                <input type="number" name="quantity" value="{{ $product->quantity }}" class="form-control"
                                    placeholder="Enter product quantity*" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Product Buying Price</label>
                                <input type="number" name="buying_price" value="{{ $product->buying_price }}"
                                    class="form-control" placeholder="Enter buying price" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.form-group -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Product Regular Price*</label>
                                <input type="number" name="regular_price" value="{{ $product->regular_price }}"
                                    class="form-control" placeholder="Enter regular price" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Product Discount Price</label>
                                <input type="number" name="discount_price" value="{{ $product->discount_price }}"
                                    class="form-control" placeholder="Enter discount price" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.form-group -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Product Image</label>
                                <input type="file" accept="image/*" name="image" class="form-control" >
                            </div>
                            <img src="{{ asset('backend/images/product/' . $product->image) }}" alt=""
                                height="200" width="200">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Select Product Type</label>
                                <select class="form-control select2" style="width: 100%;" name="product_type">
                                    <option value="feature" @if ($product->product_type == 'feature') selected @endif>Feature
                                        Products</option>
                                    <option value="new" @if ($product->product_type == 'new') selected @endif>New Products
                                    </option>
                                    <option value="regular" @if ($product->product_type == 'regular') selected @endif>Regular
                                        Product</option>
                                    <option value="sale" @if ($product->product_type == 'sale') selected @endif>Onsale
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Gallery Images</label>
                                <input type="file" accept="image/*" name="galleryImage[]" multiple value=""
                                    class="form-control" required>
                            </div>
                            @foreach ($product->galleryImage as $image)
                                <img src="{{ asset('backend/images/galleryImage/' . $image->image) }}" alt=""
                                    height="200" width="200">
                            @endforeach
                        </div>
                        <div class="col-md-12">
                            <label for="">Product Description</label>
                            <textarea id="summernote" name="description">{{ $product->description }}</textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="">Product Policy</label>
                            <textarea id="summernote2" name="product_policy">{{ $product->product_policy }}</textarea>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="update" class="form-control btn btn-primary btn-block">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', {
                'placeholder': 'mm/dd/yyyy'
            })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });

            //Date and time picker
            $('#reservationdatetime').datetimepicker({
                icons: {
                    time: 'far fa-clock'
                }
            });

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker({
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                            'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                        'MMMM D, YYYY'))
                }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function(event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            })

            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })

        })
        // BS-Stepper Init
        document.addEventListener('DOMContentLoaded', function() {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })

        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false

        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template")
        previewNode.id = ""
        var previewTemplate = previewNode.parentNode.innerHTML
        previewNode.parentNode.removeChild(previewNode)

        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
            url: "/target-url", // Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        })

        myDropzone.on("addedfile", function(file) {
            // Hookup the start button
            file.previewElement.querySelector(".start").onclick = function() {
                myDropzone.enqueueFile(file)
            }
        })

        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function(progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
        })

        myDropzone.on("sending", function(file) {
            // Show the total progress bar when upload starts
            document.querySelector("#total-progress").style.opacity = "1"
            // And disable the start button
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
        })

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function(progress) {
            document.querySelector("#total-progress").style.opacity = "0"
        })

        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function() {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
        }
        document.querySelector("#actions .cancel").onclick = function() {
            myDropzone.removeAllFiles(true)
        }
        // DropzoneJS Demo Code End
    </script>
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>
    <script>
        $(function() {
            // Summernote
            $('#summernote2').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>

    <script>
        // Add more colors...

        $(document).ready(function() {
            $("#add_color").click(function() {
                $("#color_fields").append(
                    '<input type="text" name="color[]" value="" id="color" class="form-control" placeholder="Enter product Color" >'
                )
            })
        })
        //Add more Sizes...
        $(document).ready(function() {
            $("#add_size").click(function() {
                $("#size_fields").append(
                    '<input type="text" name="size[]" value="" id="size" class="form-control" placeholder="Enter product size" >'
                )
            })
        })
    </script>
@endpush
