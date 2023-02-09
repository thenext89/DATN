
@extends('admin.layout.master')
@section('title', 'Product')
@section('body')
                <!-- Main -->
                <div class="app-main__inner">

                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-ticket icon-gradient bg-mean-fruit"></i>
                                </div>
                                <div>
                                    Product
                                    <div class="page-title-subheading">
                                        View, create, update, delete and manage.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                        <li class="nav-item">
                            <a href="./admin/product/{{$product->id}}/edit" class="nav-link">
                                <span class="btn-icon-wrapper pr-2 opacity-8">
                                    <i class="fa fa-edit fa-w-20"></i>
                                </span>
                                <span>Edit</span>
                            </a>
                        </li>

                        <li class="nav-item delete">
                            <form action="./admin/product/{{$product->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="nav-link btn" type="submit"
                                    onclick="return confirm('Do you really want to delete this item?')">
                                    <span class="btn-icon-wrapper pr-2 opacity-8">
                                        <i class="fa fa-trash fa-w-20"></i>
                                    </span>
                                    <span>Delete</span>
                                </button>
                            </form>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-body display_data">

                                    <div class="position-relative row form-group">
                                        <label for="" class="col-md-3 text-md-center col-form-label">Images</label>
                                        <div class="col-md-9 col-xl-8">
                                            <ul class="text-nowrap overflow-auto" id="images">
                                                @foreach ($product->productImages as $productImage)
                                                    <li class="d-inline-block mr-1" style="position: relative;">
                                                        <img style="height: 150px;" src="front/img/products/{{$productImage->path ?? 'image-default.png'}}"
                                                            alt="Image">
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="position-relative row form-group">
                                        <label for="brand_id"
                                            class="col-md-3 text-md-center col-form-label">Product Images</label>
                                        <div class="col-md-9 col-xl-8">
                                            <p><a href="./admin/product">Manage images</a></p>
                                        </div>
                                    </div>

                                    <div class="position-relative row form-group">
                                        <label for="brand_id"
                                            class="col-md-3 text-md-center col-form-label">Product Details</label>
                                        <div class="col-md-9 col-xl-8">
                                            <p><a href="./product-detail.html">Manage details</a></p>
                                        </div>
                                    </div>

                                    <div class="position-relative row form-group">
                                        <label for="brand_id"
                                            class="col-md-3 text-md-center col-form-label">Brand</label>
                                        <div class="col-md-9 col-xl-8">
                                            <p>{{$product->brand->name}}</p>
                                        </div>
                                    </div>

                                    <div class="position-relative row form-group">
                                        <label for="product_category_id"
                                            class="col-md-3 text-md-center col-form-label">Category</label>
                                        <div class="col-md-9 col-xl-8">
                                            <p>{{$product->productCategory->name}}</p>
                                        </div>
                                    </div>
                                
                                    <div class="position-relative row form-group">
                                        <label for="name" class="col-md-3 text-md-center col-form-label">Name</label>
                                        <div class="col-md-9 col-xl-8">
                                            <p>{{$product->name}}</p>
                                        </div>
                                    </div>

                                    <div class="position-relative row form-group">
                                        <label for="content"
                                            class="col-md-3 text-md-center col-form-label">Content</label>
                                        <div class="col-md-9 col-xl-8">
                                            <p>{{$product->content}}</p>
                                        </div>
                                    </div>

                                    <div class="position-relative row form-group">
                                        <label for="price"
                                            class="col-md-3 text-md-center col-form-label">Price</label>
                                        <div class="col-md-9 col-xl-8">
                                            <p>{{$product->price}}</p>
                                        </div>
                                    </div>

                                    <div class="position-relative row form-group">
                                        <label for="discount"
                                            class="col-md-3 text-md-center col-form-label">Discount</label>
                                        <div class="col-md-9 col-xl-8">
                                            <p>{{$product->discount}}</p>
                                        </div>
                                    </div>

                                    <div class="position-relative row form-group">
                                        <label for="qty"
                                            class="col-md-3 text-md-center col-form-label">Qty</label>
                                        <div class="col-md-9 col-xl-8">
                                            <p>{{$product->qty}}</p>
                                        </div>
                                    </div>

                                    <div class="position-relative row form-group">
                                        <label for="weight"
                                            class="col-md-3 text-md-center col-form-label">Weight</label>
                                        <div class="col-md-9 col-xl-8">
                                            <p>{{$product->weight}}</p>
                                        </div>
                                    </div>
                                    
                                    <div class="position-relative row form-group">
                                        <label for="sku"
                                            class="col-md-3 text-md-center col-form-label">SKU</label>
                                        <div class="col-md-9 col-xl-8">
                                            <p>{{$product->sku}}</p>
                                        </div>
                                    </div>

                                    <div class="position-relative row form-group">
                                        <label for="tag"
                                            class="col-md-3 text-md-center col-form-label">Tag</label>
                                        <div class="col-md-9 col-xl-8">
                                            <p>{{$product->tag}}</p>
                                        </div>
                                    </div>

                                    <div class="position-relative row form-group">
                                        <label for="featured"
                                            class="col-md-3 text-md-center col-form-label">Featured</label>
                                        <div class="col-md-9 col-xl-8">
                                            <p>{{$product->featured==1 ? 'Yes' : 'No2'}}</p>
                                        </div>
                                    </div>

                                    <div class="position-relative row form-group">
                                        <label for="description"
                                            class="col-md-3 text-md-center col-form-label">Description</label>
                                        <div class="col-md-9 col-xl-8">
                                            <p>{!!$product->description!!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Main -->

       @endsection