@extends('layouts.admin')

@section('sidebar')
    @parent
@endsection

@section('maincontent')
    <div class="col-lg-9 main-chart">

        <!--CUSTOM CHART START -->
        <div class="border-head">
            Create Role
        </div>

        <!--custom chart end-->
        <div class="row mt">
            <div class="col-lg-12">
                @if(Session::has('message'))

                    {{Session::get('message')}}

                @endif
                <div class=" form">
                    <form action="{{ route('updateproductdata') }}" method="post" class="cmxform form-horizontal style-form" id="commentForm" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">Select Category</label>

                            <div class="col-lg-10">

                                <select name="category_id" id="cat_id" class=" form-control browser-default custom-select">
                                    @foreach($categories as $category)
                                        <option value="{{$category->code}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <input type="hidden" name="product_id" value="{{ $product[0]->id }}">
                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-2">Product Name/title (required)</label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="cname" name="title" minlength="2" type="text" required="" value="{{ $product[0]->title }}">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-2">Buy price (required)</label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="cname" name="buy_price" minlength="2" type="number" required="" value="{{ $product[0]->buy_price }}">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-2">regular price (required)</label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="cname" name="regular_price" minlength="2" type="number" required="" value="{{ $product[0]->regular_price }}">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2"> Discount price  (required)</label>
                            <div class="col-lg-10">
                                <input class="form-control " id="cemail" type="number" name="flate_price" required="" value="{{ $product[0]->flate_price }}">
                            </div>
                        </div>


                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">Sections</label>
                            <div class="col-lg-10">
                                <select name="section" class=" form-control browser-default custom-select" multiple>
                                    <option value="dealsday">DEALS OF THE DAY</option>
                                    <option value="latestproduct">LATEST PRODUCTS</option>
                                    <option value="pricked">PICKED FOR YOU</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">Tag</label>
                            <div class="col-lg-10">
                                <input class="form-control " id="cemail" type="text" name="tag" required="" value="{{ $product[0]->tag }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cemail" class="control-label col-lg-2"> Product Short Description</label>
                            <div class="col-lg-10">
                                <textarea class=editor1" name="shortdes" >{{ $product[0]->shortdes }}</textarea>
                            </div>
                        </div>


                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2"> Product Info  </label>

                            <div class="col-lg-10">
                                <textarea class="editor2" name="product_info" >{{ $product[0]->product_info}}</textarea>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2"> Product Photo  (required)</label>

                            <div id="input_fields" class="col-lg-10">
                                <input type="file" class="form-control" name="images[]">
                            </div>
                            <button type="button" onclick="add()" id="addNew" class="mt-md-4 mt-0 mb-2 mb-md-0 btn btn-success">Add More Photo</button>
                        </div>



                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-theme" type="submit">Save</button>
                                <button class="btn btn-theme04" type="button">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /form-panel -->
            </div>
            <!-- /col-lg-12 -->
        </div>
        <!-- /row -->

        <!-- /row -->

        <!-- /row -->

        <script>

            function add(){



                let field = `
                            <div class="row" style="margin-top: 15px;">
                            <div class="col-md-10">
                                 <input type="file" class="form-control" name="images[]" required>
                            </div>

                            <div class="col-md-2 col pt-md-2 pt-0 text-right">
                                 <button type="button" class="remove mt-md-4 mt-0 mb-2 mb-md-0 btn btn-danger btn-block"><i class="fa fa-times-circle"></i></button>
                            </div>
                        </div>
            `;
                $("#input_fields").append(field);


                $(document).on('click', '.remove', function(){
                    $(this).parent('.col').parent('.row').remove();
                });

            }
        </script>

        <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
        <script>
            tinymce.init({
                selector:'textarea.editor1',
                width: 1009,
                height: 300
            });

            tinymce.init({
                selector:'textarea.editor2',
                width: 1009,
                height: 300
            });
        </script>

    </div>
@endsection
