<style type="text/css">

    .div_center
    {
        text-align: center;
        padding-top: 20px;

    }
    .h1_font
    {
        font-size: 30px;
        padding-bottom: 20px;
    }
    .ag-format-container {
  width: 1142px;
  margin: 0 auto;
}


body {
  background-color: #000;
}
.ag-courses_box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;

  padding: 50px 0;
}
.ag-courses_item {
  -ms-flex-preferred-size: calc(33.33333% - 30px);
  flex-basis: calc(33.33333% - 30px);

  margin: 0 15px 30px;

  overflow: hidden;

  border-radius: 28px;
}
.ag-courses-item_link {
  display: block;
  padding: 30px 20px;
  background-color: #121212;

  overflow: hidden;

  position: relative;
}
.ag-courses-item_link:hover,
.ag-courses-item_link:hover .ag-courses-item_date {
  text-decoration: none;
  color: #FFF;
}
.ag-courses-item_link:hover .ag-courses-item_bg {
  -webkit-transform: scale(10);
  -ms-transform: scale(10);
  transform: scale(10);
}
.ag-courses-item_title {
  min-height: 87px;
  margin: 0 0 25px;

  overflow: hidden;

  font-weight: bold;
  font-size: 30px;
  color: #FFF;

  z-index: 2;
  position: relative;
}
.ag-courses-item_date-box {
  font-size: 18px;
  color: #FFF;

  z-index: 2;
  position: relative;
}
.ag-courses-item_date {
  font-weight: bold;
  color: #f9b234;

  -webkit-transition: color .5s ease;
  -o-transition: color .5s ease;
  transition: color .5s ease
}
.ag-courses-item_bg {
  height: 128px;
  width: 128px;
  background-color: #f9b234;

  z-index: 1;
  position: absolute;
  top: -75px;
  right: -75px;

  border-radius: 50%;

  -webkit-transition: all .5s ease;
  -o-transition: all .5s ease;
  transition: all .5s ease;
}
.ag-courses_item:nth-child(2n) .ag-courses-item_bg {
  background-color: #3ecd5e;
}
.ag-courses_item:nth-child(3n) .ag-courses-item_bg {
  background-color: #e44002;
}
.ag-courses_item:nth-child(4n) .ag-courses-item_bg {
  background-color: #952aff;
}
.ag-courses_item:nth-child(5n) .ag-courses-item_bg {
  background-color: #cd3e94;
}
.ag-courses_item:nth-child(6n) .ag-courses-item_bg {
  background-color: #4c49ea;
}



@media only screen and (max-width: 979px) {
  .ag-courses_item {
    -ms-flex-preferred-size: calc(50% - 30px);
    flex-basis: calc(50% - 30px);
  }
  .ag-courses-item_title {
    font-size: 24px;
  }
}

@media only screen and (max-width: 767px) {
  .ag-format-container {
    width: 96%;
  }

}
@media only screen and (max-width: 300px) {
  .ag-courses_item {
    -ms-flex-preferred-size: 100%;
    flex-basis: 100%;
  }
  .ag-courses-item_title {
    min-height: 72px;
    line-height: 1;

    font-size: 24px;
  }
  .ag-courses-item_link {
    padding: 22px 40px;
  }
  .ag-courses-item_date-box {
    font-size: 16px;
  }
}

 </style>



<x-admin-layout>
<div class="py-12 w-full">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">


                            <div class="div_center">
                                <h1 class="h1_font">Admin Dashboard</h1>

                            </div>

                            <div class="ag-format-container">
                                <div class="ag-courses_box">
                                  <div class="ag-courses_item">
                                    <a href="#" class="ag-courses-item_link">
                                      <div class="ag-courses-item_bg"></div>
                              
                                      <div class="ag-courses-item_title">
                                        Total Product&#160;<br>
                                        <span class="ag-courses-item_date">
                                            {{$total_product}}
                                          </span>
                                      </div>
                                    </a>
                                  </div>
                              
                                  <div class="ag-courses_item">
                                    <a href="#" class="ag-courses-item_link">
                                      <div class="ag-courses-item_bg"></div>
                              
                                      <div class="ag-courses-item_title">
                                        Total User&#160;<br>
                                        <span class="ag-courses-item_date">
                                            {{$total_user}}
                                          </span>
                                      </div>
                                    </a>
                                  </div>
                              
                                  <div class="ag-courses_item">
                                    <a href="#" class="ag-courses-item_link">
                                      <div class="ag-courses-item_bg"></div>
                              
                                      <div class="ag-courses-item_title">
                                        Total Orders&#160;<br>
                                        <span class="ag-courses-item_date">
                                            {{$total_order}}
                                          </span>
                                      </div>
                                    </a>
                                  </div>
                              
                                  <div class="ag-courses_item">
                                    <a href="#" class="ag-courses-item_link">
                                      <div class="ag-courses-item_bg"></div>
                              
                                      <div class="ag-courses-item_title">
                                        Total Revenue&#160;<br>
                                        <span class="ag-courses-item_date">
                                            {{$total_revenue}}
                                          </span>
                                      </div>
                                    </a>
                                  </div>
                              
                                  <div class="ag-courses_item">
                                    <a href="#" class="ag-courses-item_link">
                                      <div class="ag-courses-item_bg"></div>
                              
                                      <div class="ag-courses-item_title">
                                        Total Delivery&#160;<br>
                                        <span class="ag-courses-item_date">
                                            {{$total_delivered}}
                                          </span>
                                      </div>
                                    </a>
                                  </div>
                              
                                  <div class="ag-courses_item">
                                    <a href="#" class="ag-courses-item_link">
                                      <div class="ag-courses-item_bg"></div>
                              
                                      <div class="ag-courses-item_title">
                                        Total Order Processing&#160;<br>
                                        <span class="ag-courses-item_date">
                                            {{$total_processing}}
                                          </span>
                                      </div>
                                    </a>
                                  </div>
                              
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-admin-layout>