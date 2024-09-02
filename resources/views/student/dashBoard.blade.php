@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>10</h3>

                <p>New Courses</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>100<sup style="font-size: 20px">%</sup></h3>

                <p>facilities</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>1500+</h3>

                <p>Student</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>55+</h3>

                <p>Staff</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        
        <div class="container-fluid bg-gradient-blue">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Student Profile</h1>
          </div>
          
         </div>
         </div><!-- /.container-fluid -->
    
        <!-- Main row -->
        <div class="row">
          <section class="col-lg connectedSortable ui-sortable">
            <div class="info-box">

              <div class="col-2 bg-info">
                
                <div>
                  <img src="{{ asset('uploads/' . Auth::user()->profile_image) }}" style="height: 120px; width:120px; padding:10px 0px 0px 20px;" >
                </div>
              </div>
              <div class="col-7 bg-gradient-yellow">
                <div>
                  <label for="">Name : </label> {{Auth::user()->name}}
                  
                </div>
                <div>
                  <label for="">email :</label> {{Auth::user()->email}}
                </div>
                <div>
                  <label for="">Mobile :</label> {{Auth::user()->mobile}}
                </div>
                <div>
                  <label for="">Address :</label> {{Auth::user()->address}}
                </div>
              </div>
              <div class="col-3 ">
                <div class="overlay dark">
                      <span class="info-box-icon"><i class="fas fa-2x fa-sync-alt fa-spin"> </i></span>
                      <div class="info-box-content">
                        <span class="info-box-number">Result</span>
                        <span class="info-box-number">Updating</span>
                        <span class="info-box-number">41,410</span>
                        
                        <div class="progress">
                          <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <span class="progress-description">
                          within in 30 Days
                        </span>
                      </div>
                </div>
              </div>
              
            </div>
          </section>
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          
          <section class="col-lg connectedSortable ui-sortable">

            <!-- Map card -->
            <div class="card bg-gradient-success">
              <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                      <i class="fas fa-bars"></i>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a href="#" class="dropdown-item">Add new event</a>
                      <a href="#" class="dropdown-item">Clear events</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"><div class="bootstrap-datetimepicker-widget usetwentyfour"><ul class="list-unstyled"><li class="show"><div class="datepicker"><div class="datepicker-days" style=""><table class="table table-sm"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Month"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">February 2024</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Month"></span></th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td data-action="selectDay" data-day="01/28/2024" class="day old weekend">28</td><td data-action="selectDay" data-day="01/29/2024" class="day old">29</td><td data-action="selectDay" data-day="01/30/2024" class="day old">30</td><td data-action="selectDay" data-day="01/31/2024" class="day old">31</td><td data-action="selectDay" data-day="02/01/2024" class="day">1</td><td data-action="selectDay" data-day="02/02/2024" class="day">2</td><td data-action="selectDay" data-day="02/03/2024" class="day weekend">3</td></tr><tr><td data-action="selectDay" data-day="02/04/2024" class="day weekend">4</td><td data-action="selectDay" data-day="02/05/2024" class="day">5</td><td data-action="selectDay" data-day="02/06/2024" class="day">6</td><td data-action="selectDay" data-day="02/07/2024" class="day">7</td><td data-action="selectDay" data-day="02/08/2024" class="day">8</td><td data-action="selectDay" data-day="02/09/2024" class="day">9</td><td data-action="selectDay" data-day="02/10/2024" class="day weekend">10</td></tr><tr><td data-action="selectDay" data-day="02/11/2024" class="day weekend">11</td><td data-action="selectDay" data-day="02/12/2024" class="day">12</td><td data-action="selectDay" data-day="02/13/2024" class="day">13</td><td data-action="selectDay" data-day="02/14/2024" class="day">14</td><td data-action="selectDay" data-day="02/15/2024" class="day">15</td><td data-action="selectDay" data-day="02/16/2024" class="day">16</td><td data-action="selectDay" data-day="02/17/2024" class="day active today weekend">17</td></tr><tr><td data-action="selectDay" data-day="02/18/2024" class="day weekend">18</td><td data-action="selectDay" data-day="02/19/2024" class="day">19</td><td data-action="selectDay" data-day="02/20/2024" class="day">20</td><td data-action="selectDay" data-day="02/21/2024" class="day">21</td><td data-action="selectDay" data-day="02/22/2024" class="day">22</td><td data-action="selectDay" data-day="02/23/2024" class="day">23</td><td data-action="selectDay" data-day="02/24/2024" class="day weekend">24</td></tr><tr><td data-action="selectDay" data-day="02/25/2024" class="day weekend">25</td><td data-action="selectDay" data-day="02/26/2024" class="day">26</td><td data-action="selectDay" data-day="02/27/2024" class="day">27</td><td data-action="selectDay" data-day="02/28/2024" class="day">28</td><td data-action="selectDay" data-day="02/29/2024" class="day">29</td><td data-action="selectDay" data-day="03/01/2024" class="day new">1</td><td data-action="selectDay" data-day="03/02/2024" class="day new weekend">2</td></tr><tr><td data-action="selectDay" data-day="03/03/2024" class="day new weekend">3</td><td data-action="selectDay" data-day="03/04/2024" class="day new">4</td><td data-action="selectDay" data-day="03/05/2024" class="day new">5</td><td data-action="selectDay" data-day="03/06/2024" class="day new">6</td><td data-action="selectDay" data-day="03/07/2024" class="day new">7</td><td data-action="selectDay" data-day="03/08/2024" class="day new">8</td><td data-action="selectDay" data-day="03/09/2024" class="day new weekend">9</td></tr></tbody></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Year"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2024</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span data-action="selectMonth" class="month active">Feb</span><span data-action="selectMonth" class="month">Mar</span><span data-action="selectMonth" class="month">Apr</span><span data-action="selectMonth" class="month">May</span><span data-action="selectMonth" class="month">Jun</span><span data-action="selectMonth" class="month">Jul</span><span data-action="selectMonth" class="month">Aug</span><span data-action="selectMonth" class="month">Sep</span><span data-action="selectMonth" class="month">Oct</span><span data-action="selectMonth" class="month">Nov</span><span data-action="selectMonth" class="month">Dec</span></td></tr></tbody></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Decade"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectYear" class="year old">2019</span><span data-action="selectYear" class="year">2020</span><span data-action="selectYear" class="year">2021</span><span data-action="selectYear" class="year">2022</span><span data-action="selectYear" class="year">2023</span><span data-action="selectYear" class="year active">2024</span><span data-action="selectYear" class="year">2025</span><span data-action="selectYear" class="year">2026</span><span data-action="selectYear" class="year">2027</span><span data-action="selectYear" class="year">2028</span><span data-action="selectYear" class="year">2029</span><span data-action="selectYear" class="year old">2030</span></td></tr></tbody></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade" data-selection="2016">2010</span><span data-action="selectDecade" class="decade active" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td></tr></tbody></table></div></div></li><li class="picker-switch accordion-toggle"></li></ul></div></div>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
            <!-- /.card -->

          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection