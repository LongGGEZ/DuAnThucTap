@extends('layout')
@section('content')

<section id="slider">
    <!--slider-->
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div id="slider-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
              <li data-target="#slider-carousel" data-slide-to="1"></li>
              <li data-target="#slider-carousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
              <div class="item active">
                <div class="col-sm-6">
                  <h1><span>CMT</span>-Dragon</h1>
                  <h2>WE THINK AS <br> WE DO YOUR BUSINESS</h2>
                  <p>Hiểu doanh nghiệp của bạn và tùy chỉnh từng tính năng để có giải pháp tốt nhất </p>
                  <button type="button" class="btn btn-default get">Get demo</button>
                </div>
                <div class="col-sm-6">
                  <img src="{{('public/frontend/images/QTData/slide1.jpg')}}" class="girl img-responsive" alt="" />
                  <img src="{{('public/frontend/images/QTData/logo1.png')}}" class="pricing" alt="" />
                </div>
              </div>
              <div class="item">
                <div class="col-sm-6">
                  <h1><span>CMT</span>-Dragon</h1>
                  <h2>PURSUE SIMPLICITY, EFFICIENCY, AND INTEGRITY</h2>
                  <p>Biến các quy trình phức tạp thành các giải pháp đơn giản.<br>Đảm bảo hiệu quả trong từng giải pháp.
                    <br>Tính toàn vẹn trong từng giai đoạn hợp tác
                  </p>
                </div>
                <div class="col-sm-6">
                  <img src="{{('public/frontend/images/QTData/slide2.png')}}" class="girl img-responsive" alt="" />
                </div>
              </div>

              <div class="item">
                <div class="col-sm-6">
                  <h1><span>CMT</span>-Dragon</h1>
                  <h2>REVEAL THE OPPORTUNITY BY EXPLORING THE INSIGHT OF DATA</h2>
                  <p>Cung cấp các giải pháp theo hướng dữ liệu của chúng tôi với các kỹ thuật tạo xu hướng cấp cao</p>
                  <button type="button" class="btn btn-default get">Get demo</button>
                </div>
                <div class="col-sm-6">
                  <img src="{{('public/frontend/images/QTData/slide3.jpg')}}" class="girl img-responsive" alt="" />
                  <img src="{{('public/frontend/images/QTData/logo1.png')}}" class="pricing" alt="" />
                </div>
              </div>

            </div>

            <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
              <i class="fa fa-angle-left"></i>
            </a>
            <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
              <i class="fa fa-angle-right"></i>
            </a>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!--/slider-->

  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <div class="left-sidebar">
            <h2>Bộ lọc 1</h2>
            <div class="panel-group category-products" id="accordian">
              <!--category-productsr-->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                      <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                      Class1
                    </a>
                  </h4>
                </div>
                <div id="sportswear" class="panel-collapse collapse">
                  <div class="panel-body">
                    <ul>
                      <li><a href="#">Data1 </a></li>
                      <li><a href="#">Data2 </a></li>
                      <li><a href="#">Data3 </a></li>
                      <li><a href="#">Data4</a></li>
                      <li><a href="#">Data5 </a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                      <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                      Class2
                    </a>
                  </h4>
                </div>
                <div id="mens" class="panel-collapse collapse">
                  <div class="panel-body">
                    <ul>
                      <li><a href="#">Data1</a></li>
                      <li><a href="#">Data2</a></li>
                      <li><a href="#">Data3</a></li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                      <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                      Class3
                    </a>
                  </h4>
                </div>
                <div id="womens" class="panel-collapse collapse">
                  <div class="panel-body">
                    <ul>
                      <li><a href="#">Data1</a></li>
                      <li><a href="#">Data2</a></li>
                      <li><a href="#">Data3</a></li>
                      <li><a href="#">Data4</a></li>
                      <li><a href="#">Data5</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"><a href="#">Class4</a></h4>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"><a href="#">Class5</a></h4>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"><a href="#">Class6</a></h4>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"><a href="#">Class7</a></h4>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"><a href="#">Class8</a></h4>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"><a href="#">Class9</a></h4>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"><a href="#">Class10</a></h4>
                </div>
              </div>
            </div>
            <!--/category-products-->

            <div class="brands_products">
              <!--brands_products-->
              <h2>Bộ lọc 2</h2>
              <div class="brands-name">
                <ul class="nav nav-pills nav-stacked">
                  <li><a href="#"> <span class="pull-right">(50)</span>Data1</a></li>
                  <li><a href="#"> <span class="pull-right">(56)</span>Data2</a></li>
                  <li><a href="#"> <span class="pull-right">(27)</span>Data3</a></li>
                  <li><a href="#"> <span class="pull-right">(32)</span>Data4</a></li>
                  <li><a href="#"> <span class="pull-right">(5)</span>Data5</a></li>
                  <li><a href="#"> <span class="pull-right">(9)</span>Data6</a></li>
                  <li><a href="#"> <span class="pull-right">(4)</span>Data7</a></li>
                </ul>
              </div>
            </div>
            <!--/brands_products-->

            <div class="price-range">
              <!--price-range-->
              <h2>Price Range</h2>
              <div class="well text-center">
                <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5"
                  data-slider-value="[250,450]" id="sl2"><br />
                <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
              </div>
            </div>
            <!--/price-range-->

            <div class="shipping text-center">
              <!--shipping-->
              <img src="{{('public/frontend/images/QTData/chungnhan.jpg')}}" alt="" />
            </div>
            <!--/shipping-->

          </div>
        </div>
        <div class="col-sm-9 padding-right">
<div class="features_items">
  <!--features_items-->
  <h2 class="title text-center">Features Items</h2>
  <div class="col-sm-4">
    <div class="product-image-wrapper">
      <div class="single-products">
        <div class="productinfo text-center">
          <img src="images/home/product1.jpg" alt="" />
          <h2>$56</h2>
          <p>Easy Polo Black Edition</p>
          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
        </div>
        <div class="product-overlay">
          <div class="overlay-content">
            <h2>$56</h2>
            <p>Easy Polo Black Edition</p>
            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
          </div>
        </div>
      </div>
      <div class="choose">
        <ul class="nav nav-pills nav-justified">
          <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
          <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="product-image-wrapper">
      <div class="single-products">
        <div class="productinfo text-center">
          <img src="images/home/product2.jpg" alt="" />
          <h2>$56</h2>
          <p>Easy Polo Black Edition</p>
          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
        </div>
        <div class="product-overlay">
          <div class="overlay-content">
            <h2>$56</h2>
            <p>Easy Polo Black Edition</p>
            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
          </div>
        </div>
      </div>
      <div class="choose">
        <ul class="nav nav-pills nav-justified">
          <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
          <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="product-image-wrapper">
      <div class="single-products">
        <div class="productinfo text-center">
          <img src="{{('public/frontend/images/product3.jpg')}}" alt="" />
          <h2>$56</h2>
          <p>Easy Polo Black Edition</p>
          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
        </div>
        <div class="product-overlay">
          <div class="overlay-content">
            <h2>$56</h2>
            <p>Easy Polo Black Edition</p>
            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
          </div>
        </div>
      </div>
      <div class="choose">
        <ul class="nav nav-pills nav-justified">
          <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
          <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="product-image-wrapper">
      <div class="single-products">
        <div class="productinfo text-center">
          <img src="{{('public/frontend/images/product4.jpg')}}" alt="" />
          <h2>$56</h2>
          <p>Easy Polo Black Edition</p>
          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
        </div>
        <div class="product-overlay">
          <div class="overlay-content">
            <h2>$56</h2>
            <p>Easy Polo Black Edition</p>
            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
          </div>
        </div>
        <img src="{{('public/frontend/images/new.png')}}" class="new" alt="" />
      </div>
      <div class="choose">
        <ul class="nav nav-pills nav-justified">
          <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
          <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="product-image-wrapper">
      <div class="single-products">
        <div class="productinfo text-center">
          <img src="{{('public/frontend/images/product5.jpg')}}" alt="" />
          <h2>$56</h2>
          <p>Easy Polo Black Edition</p>
          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
        </div>
        <div class="product-overlay">
          <div class="overlay-content">
            <h2>$56</h2>
            <p>Easy Polo Black Edition</p>
            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
          </div>
        </div>
        <img src="images/home/sale.png" class="new" alt="" />
      </div>
      <div class="choose">
        <ul class="nav nav-pills nav-justified">
          <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
          <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="product-image-wrapper">
      <div class="single-products">
        <div class="productinfo text-center">
          <img src="{{('public/frontend/images/product6.jpg')}}" alt="" />
          <h2>$56</h2>
          <p>Easy Polo Black Edition</p>
          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
        </div>
        <div class="product-overlay">
          <div class="overlay-content">
            <h2>$56</h2>
            <p>Easy Polo Black Edition</p>
            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
          </div>
        </div>
      </div>
      <div class="choose">
        <ul class="nav nav-pills nav-justified">
          <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
          <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
        </ul>
      </div>
    </div>
  </div>

</div>
<!--features_items-->

<div class="category-tab">
  <!--category-tab-->
  <div class="col-sm-12">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#tshirt" data-toggle="tab">T-Shirt</a></li>
      <li><a href="#blazers" data-toggle="tab">Blazers</a></li>
      <li><a href="#sunglass" data-toggle="tab">Sunglass</a></li>
      <li><a href="#kids" data-toggle="tab">Kids</a></li>
      <li><a href="#poloshirt" data-toggle="tab">Polo shirt</a></li>
    </ul>
  </div>
  <div class="tab-content">
    <div class="tab-pane fade active in" id="tshirt">
      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="{{('public/frontend/images/gallery1.jpg')}}" alt="" />
              <h2>$56</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to
                cart</a>
            </div>

          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="images/home/gallery2.jpg" alt="" />
              <h2>$56</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to
                cart</a>
            </div>

          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="{{('public/frontend/images/gallery3.jpg')}}" alt="" />
              <h2>$56</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to
                cart</a>
            </div>

          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="images/home/gallery4.jpg" alt="" />
              <h2>$56</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to
                cart</a>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="tab-pane fade" id="blazers">
      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="{{('public/frontend/images/gallery4.jpg')}}" alt="" />
              <h2>$56</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to
                cart</a>
            </div>

          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="images/home/gallery3.jpg" alt="" />
              <h2>$56</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to
                cart</a>
            </div>

          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="{{('public/frontend/images/gallery2.jpg')}}" alt="" />
              <h2>$56</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to
                cart</a>
            </div>

          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="images/home/gallery1.jpg" alt="" />
              <h2>$56</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to
                cart</a>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="tab-pane fade" id="sunglass">
      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="{{('public/frontend/images/gallery3.jpg')}}" alt="" />
              <h2>$56</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to
                cart</a>
            </div>

          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="images/home/gallery4.jpg" alt="" />
              <h2>$56</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to
                cart</a>
            </div>

          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="{{('public/frontend/images/gallery1.jpg')}}" alt="" />
              <h2>$56</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to
                cart</a>
            </div>

          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="images/home/gallery2.jpg" alt="" />
              <h2>$56</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to
                cart</a>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="tab-pane fade" id="kids">
      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="{{'public/frontend/images/gallery1.jpg'}}" alt="" />
              <h2>$56</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to
                cart</a>
            </div>

          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="images/home/gallery2.jpg" alt="" />
              <h2>$56</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to
                cart</a>
            </div>

          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="images/home/gallery3.jpg" alt="" />
              <h2>$56</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to
                cart</a>
            </div>

          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="images/home/gallery4.jpg" alt="" />
              <h2>$56</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to
                cart</a>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="tab-pane fade" id="poloshirt">
      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="images/home/gallery2.jpg" alt="" />
              <h2>$56</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to
                cart</a>
            </div>

          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="images/home/gallery4.jpg" alt="" />
              <h2>$56</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to
                cart</a>
            </div>

          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="images/home/gallery3.jpg" alt="" />
              <h2>$56</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to
                cart</a>
            </div>

          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="images/home/gallery1.jpg" alt="" />
              <h2>$56</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to
                cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/category-tab-->

<div class="recommended_items">
  <!--recommended_items-->
  <h2 class="title text-center">OUR TEAM</h2>

  <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item active">
        <div class="col-sm-4">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="{{('public/frontend/images/QTData/minhtran.jpg')}}" alt="" />
                <h2>Minh Trần</h2>
                <p>Supervisor</p>
                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-angle-down"></i>See more</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="{{('public/frontend/images/QTData/vinhtran.jpg')}}" alt="" />
                <h2>Vinh Trần</h2>
                <p>Leader</p>
                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-angle-down"></i>See more</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="public/frontend/images/QTData/binle.jpg" alt="" />
                <h2>Bin Lê</h2>
                <p>Team Members</p>
                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-angle-down"></i>See more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="col-sm-4">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="public/frontend/images/QTData/thuannguyen.jpg" alt="" />
                <h2>Thuận Nguyễn</h2>
                <p>Team Members</p>
                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-angle-down"></i>See more</a>
              </div>

            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="public/frontend/images/QTData/tungnguyen.jpg" alt="" />
                <h2>Tùng Nguyễn</h2>
                <p>Team Members</p>
                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-angle-down"></i>See more</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="public/frontend/images/QTData/longnguyen.jpg" alt="" />
                <h2>Long Nguyễn</h2>
                <p>Team Members</p>
                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>See
                  more</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
      <i class="fa fa-angle-left"></i>
    </a>
    <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
      <i class="fa fa-angle-right"></i>
    </a>
  </div>
</div>
<!--/recommended_items-->
@endsection