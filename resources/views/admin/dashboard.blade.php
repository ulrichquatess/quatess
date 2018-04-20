@extends('layouts.adminmain')
@section('content')
<!-- Start page content wrapper -->
  <div class="page-content-wrapper animated fadeInRight">
    <div class="page-content">
      <div class="wrapper-content ">
        <div class="row">
          <!-- begin col-3 -->
          <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats red-bg">
              <div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
              <div class="stats-title">TODAY'S VISITS</div>
              <div class="stats-number">7,842,900</div>
              <div class="stats-progress progress">
                <div style="width: 70.1%;" class="progress-bar"></div>
              </div>
              <div class="stats-desc">Better than last week (70.1%)</div>
            </div>
          </div>
          <!-- end col-3 -->
          <!-- begin col-3 -->
          <div class="col-md-3 col-sm-6 mtop15">
            <div class="widget widget-stats aqua-bg ">
              <div class="stats-icon stats-icon-lg"><i class="fa fa-tags fa-fw"></i></div>
              <div class="stats-title">TODAY'S PROFIT</div>
              <div class="stats-number">180,200</div>
              <div class="stats-progress progress">
                <div style="width: 40.5%;" class="progress-bar"></div>
              </div>
              <div class="stats-desc">Better than last week (40.5%)</div>
            </div>
          </div>
          <!-- end col-3 -->
          <!-- begin col-3 -->
          <div class="col-md-3 col-sm-6 mtop15">
            <div class="widget widget-stats purple-bg">
              <div class="stats-icon stats-icon-lg"><i class="fa fa-shopping-cart fa-fw"></i></div>
              <div class="stats-title">NEW ORDERS</div>
              <div class="stats-number">38,900</div>
              <div class="stats-progress progress">
                <div style="width: 76.3%;" class="progress-bar"></div>
              </div>
              <div class="stats-desc">Better than last week (76.3%)</div>
            </div>
          </div>
          <!-- end col-3 -->
          <!-- begin col-3 -->
          <div class="col-md-3 col-sm-6 mtop15">
            <div class="widget widget-stats black-bg">
              <div class="stats-icon stats-icon-lg"><i class="fa fa-comments fa-fw"></i></div>
              <div class="stats-title">NEW COMMENTS</div>
              <div class="stats-number">3,988</div>
              <div class="stats-progress progress">
                <div style="width: 54.9%;" class="progress-bar"></div>
              </div>
              <div class="stats-desc">Better than last week (54.9%)</div>
            </div>
          </div>
          <!-- end col-3 -->
        </div>
        <div class="row top20">
          <div class="col-lg-12">
            <div class="ibox float-e-margins">
              <div class="ibox-title">
                <h5>Orders</h5>
                <div class="pull-right">
                  <div class="btn-group">
                    <button type="button" class="btn btn-xs aqua active">Today</button>
                    <button type="button" class="btn btn-xs aqua">Monthly</button>
                    <button type="button" class="btn btn-xs aqua">Annual</button>
                  </div>
                </div>
              </div>
              <div  class="ibox-content collapse in">
                <div >
                  <div class="widgets-container">
                    <div class="row">
                      <div class="col-sm-9">
                        <div class=" borderNone flot-chart-box">
                          <div id="flot-dashboard-chart" class="demo-placeholder"></div>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <ul class="stat-list">
                          <li>
                            <h2 class="no-margins">9,888</h2>
                            <small>Total orders in Jan</small>
                            <div class="stat-percent">58% <i class="fa fa-level-up text-navy"></i></div>
                            <div class="progress progress-mini">
                              <div class="progress-bar" style="width: 58%;"></div>
                            </div>
                          </li>
                          <li>
                            <h2 class="no-margins">7,666</h2>
                            <small>Total orders in Dec</small>
                            <div class="stat-percent">48% <i class="fa fa-level-up text-navy"></i></div>
                            <div class="progress progress-mini">
                              <div class="progress-bar" style="width: 48%;"></div>
                            </div>
                          </li>
                          <li>
                            <h2 class="no-margins ">4,422</h2>
                            <small>Orders in Nov</small>
                            <div class="stat-percent">60% <i class="fa fa-level-down text-navy"></i></div>
                            <div class="progress progress-mini">
                              <div class="progress-bar" style="width: 60%;"></div>
                            </div>
                          </li>
                          <li>
                            <h2 class="no-margins ">9,180</h2>
                            <small>Monthly income from orders</small>
                            <div class="stat-percent">22% <i class="fa fa-bolt text-navy"></i></div>
                            <div class="progress progress-mini">
                              <div class="progress-bar" style="width: 22%;"></div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="col-lg-9">
              <div class="ibox float-e-margins">
                <div class="ibox-title">
                  <h5>Last Month Salary </h5>
                  <div class="ibox-tools"> <a class="btn aqua btn-xs" href="#"> 31-Jan-2017</a> </div>
                </div>
                <div class="ibox-content collapse in" >
                  <div class="widgets-container">
                    <div class="table table-hover">
                      <table id="SalaryTable" class="display nowrap table  responsive nowrap table-bordered" >
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                          </tr>
                        </tfoot>
                        <tbody>
                          <tr>
                            <td>Jordan Belfort</td>
                            <td>System Architect</td>
                            <td>London</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                          </tr>
                          <tr>
                            <td>Naomi Lapaglia</td>
                            <td>Accountant</td>
                            <td>London</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
                          </tr>
                          <tr>
                            <td>Auckland Straight Line Host</td>
                            <td>Junior Technical Author</td>
                            <td>London</td>
                            <td>66</td>
                            <td>2009/01/12</td>
                            <td>$86,000</td>
                          </tr>
                          <tr>
                            <td>Donnie Azoff</td>
                            <td>Senior Javascript Developer</td>
                            <td>London</td>
                            <td>22</td>
                            <td>2012/03/29</td>
                            <td>$433,060</td>
                          </tr>
                          <tr>
                            <td>Mark Hanna</td>
                            <td>Accountant</td>
                            <td>London</td>
                            <td>33</td>
                            <td>2008/11/28</td>
                            <td>$162,700</td>
                          </tr>
                          <tr>
                            <td>Jean-Jacques Saurel</td>
                            <td>Integration Specialist</td>
                            <td>London</td>
                            <td>61</td>
                            <td>2012/12/02</td>
                            <td>$372,000</td>
                          </tr>
                          <tr>
                            <td>Patrick Denham</td>
                            <td>Sales Assistant</td>
                            <td>London</td>
                            <td>59</td>
                            <td>2012/08/06</td>
                            <td>$137,500</td>
                          </tr>
                          <tr>
                            <td>Teresa Petrillo</td>
                            <td>Integration Specialist</td>
                            <td>London</td>
                            <td>55</td>
                            <td>2010/10/14</td>
                            <td>$327,900</td>
                          </tr>
                          <tr>
                            <td>Brad</td>
                            <td>Javascript Developer</td>
                            <td>London</td>
                            <td>39</td>
                            <td>2009/09/15</td>
                            <td>$205,500</td>
                          </tr>
                          <tr>
                            <td>Max Belfort</td>
                            <td>Software Engineer</td>
                            <td>New York</td>
                            <td>23</td>
                            <td>2008/12/13</td>
                            <td>$103,600</td>
                          </tr>
                          <tr>
                            <td>Manny Riskin</td>
                            <td>Office Manager</td>
                            <td>New York</td>
                            <td>30</td>
                            <td>2008/12/19</td>
                            <td>$90,560</td>
                          </tr>
                          <tr>
                            <td>Aunt Emma</td>
                            <td>Support Lead</td>
                            <td>New York</td>
                            <td>22</td>
                            <td>2013/03/03</td>
                            <td>$342,000</td>
                          </tr>
                          <tr>
                            <td>Chantalle</td>
                            <td>Regional Director</td>
                            <td>New York</td>
                            <td>36</td>
                            <td>2008/10/16</td>
                            <td>$470,600</td>
                          </tr>
                          <tr>
                            <td>Nicky "Rugrat" Koskoff</td>
                            <td>Senior Marketing Designer</td>
                            <td>New York</td>
                            <td>43</td>
                            <td>2012/12/18</td>
                            <td>$313,500</td>
                          </tr>
                          <tr>
                            <td>Captain Ted Beecham</td>
                            <td>Regional Director</td>
                            <td>New York</td>
                            <td>19</td>
                            <td>2010/03/17</td>
                            <td>$385,750</td>
                          </tr>
                          <tr>
                            <td>Leah Belfort</td>
                            <td>Marketing Designer</td>
                            <td>New York</td>
                            <td>66</td>
                            <td>2012/11/27</td>
                            <td>$198,500</td>
                          </tr>
                          <tr>
                            <td>Toby Welch</td>
                            <td>Chief Financial Officer (CFO)</td>
                            <td>New York</td>
                            <td>64</td>
                            <td>2010/06/09</td>
                            <td>$725,000</td>
                          </tr>
                          <tr>
                            <td>Chester Ming</td>
                            <td>Systems Administrator</td>
                            <td>New York</td>
                            <td>59</td>
                            <td>2009/04/10</td>
                            <td>$237,500</td>
                          </tr>
                          <tr>
                            <td>Alden "Sea Otter" Kupferberg</td>
                            <td>Software Engineer</td>
                            <td>New York</td>
                            <td>41</td>
                            <td>2012/10/13</td>
                            <td>$132,000</td>
                          </tr>
                          <tr>
                            <td>Janet</td>
                            <td>Personnel Lead</td>
                            <td>San Francisco</td>
                            <td>35</td>
                            <td>2012/09/26</td>
                            <td>$217,500</td>
                          </tr>
                          <tr>
                            <td>Robbie </td>
                            <td>Development Lead</td>
                            <td>Singapore</td>
                            <td>30</td>
                            <td>2011/09/03</td>
                            <td>$345,000</td>
                          </tr>
                          <tr>
                            <td>Steve Madden</td>
                            <td>Chief Marketing Officer (CMO)</td>
                            <td>Edinburgh</td>
                            <td>40</td>
                            <td>2009/06/25</td>
                            <td>$675,000</td>
                          </tr>
                          <tr>
                            <td>Kimmie Belzer</td>
                            <td>Pre-Sales Support</td>
                            <td>San Francisco</td>
                            <td>21</td>
                            <td>2011/12/12</td>
                            <td>$106,450</td>
                          </tr>
                          <tr>
                            <td>Hildy Azoff</td>
                            <td>Sales Assistant</td>
                            <td>San Francisco</td>
                            <td>23</td>
                            <td>2010/09/20</td>
                            <td>$85,600</td>
                          </tr>
                          <tr>
                            <td>Lucas Solomon</td>
                            <td>Chief Executive Officer (CEO)</td>
                            <td>London</td>
                            <td>47</td>
                            <td>2009/10/09</td>
                            <td>$1,200,000</td>
                          </tr>
                          <tr>
                            <td>Honorary Samantha Stogel</td>
                            <td>Developer</td>
                            <td>Singapore</td>
                            <td>42</td>
                            <td>2010/12/22</td>
                            <td>$92,575</td>
                          </tr>
                          <tr>
                            <td>Nolan Drager</td>
                            <td>Regional Director</td>
                            <td>Edinburgh</td>
                            <td>28</td>
                            <td>2010/11/14</td>
                            <td>$357,650</td>
                          </tr>
                          <tr>
                            <td>Jenette Caldwell</td>
                            <td>Software Engineer</td>
                            <td>Tokyo</td>
                            <td>28</td>
                            <td>2011/06/07</td>
                            <td>$206,850</td>
                          </tr>
                          <tr>
                            <td>Jennifer Acosta</td>
                            <td>Chief Operating Officer (COO)</td>
                            <td>San Francisco</td>
                            <td>48</td>
                            <td>2010/03/11</td>
                            <td>$850,000</td>
                          </tr>
                          <tr>
                            <td>Jennifer Chang</td>
                            <td>Regional Marketing</td>
                            <td>London</td>
                            <td>20</td>
                            <td>2011/08/14</td>
                            <td>$163,000</td>
                          </tr>
                          <tr>
                            <td>Jessica E. Summerville</td>
                            <td>Integration Specialist</td>
                            <td>Tokyo</td>
                            <td>37</td>
                            <td>2011/06/02</td>
                            <td>$95,400</td>
                          </tr>
                          <tr>
                            <td>Jonas Alexander</td>
                            <td>Developer</td>
                            <td>Tokyo</td>
                            <td>53</td>
                            <td>2009/10/22</td>
                            <td>$114,500</td>
                          </tr>
                          <tr>
                            <td>Lael Greer</td>
                            <td>Technical Author</td>
                            <td>New York</td>
                            <td>27</td>
                            <td>2011/05/07</td>
                            <td>$145,000</td>
                          </tr>
                          <tr>
                            <td>Martena Mccray</td>
                            <td>Team Leader</td>
                            <td>London</td>
                            <td>22</td>
                            <td>2008/10/26</td>
                            <td>$235,500</td>
                          </tr>
                          <tr>
                            <td>Michael Bruce</td>
                            <td>Post-Sales support</td>
                            <td>Tokyo</td>
                            <td>46</td>
                            <td>2011/03/09</td>
                            <td>$324,050</td>
                          </tr>
                          <tr>
                            <td>Michael Silva</td>
                            <td>Marketing Designer</td>
                            <td>Singapore</td>
                            <td>47</td>
                            <td>2009/12/09</td>
                            <td>$85,675</td>
                          </tr>
                          <tr>
                            <td>Michelle House</td>
                            <td>Office Manager</td>
                            <td>San Francisco</td>
                            <td>51</td>
                            <td>2008/12/16</td>
                            <td>$164,500</td>
                          </tr>
                          <tr>
                            <td>Mike Loreipsum</td>
                            <td>Secretary</td>
                            <td>London</td>
                            <td>41</td>
                            <td>2010/02/12</td>
                            <td>$109,850</td>
                          </tr>
                          <tr>
                            <td>Olivia Liang</td>
                            <td>Financial Controller</td>
                            <td>London</td>
                            <td>62</td>
                            <td>2009/02/14</td>
                            <td>$452,500</td>
                          </tr>
                          <tr>
                            <td>Olivia Wenscombe</td>
                            <td>Office Manager</td>
                            <td>New York</td>
                            <td>37</td>
                            <td>2008/12/11</td>
                            <td>$136,200</td>
                          </tr>
                          <tr>
                            <td>Prescott Bartlett</td>
                            <td>Director</td>
                            <td>San Francisco</td>
                            <td>65</td>
                            <td>2008/09/26</td>
                            <td>$645,750</td>
                          </tr>
                          <tr>
                            <td>Quinn Flynn</td>
                            <td>Support Engineer</td>
                            <td>London</td>
                            <td>64</td>
                            <td>2011/02/03</td>
                            <td>$234,500</td>
                          </tr>
                          <tr>
                            <td>Rhona Davidson</td>
                            <td>Software Engineer</td>
                            <td>New York</td>
                            <td>38</td>
                            <td>2011/05/03</td>
                            <td>$163,500</td>
                          </tr>
                          <tr>
                            <td>Robert Angier</td>
                            <td>Support Engineer</td>
                            <td>San Francisco</td>
                            <td>37</td>
                            <td>2009/08/19</td>
                            <td>$139,575</td>
                          </tr>
                          <tr>
                            <td>Sakura Yamamoto</td>
                            <td>Developer</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>2013/08/11</td>
                            <td>$98,540</td>
                          </tr>
                          <tr>
                            <td>Serge Baldwin</td>
                            <td>Support Engineer</td>
                            <td>Edinburgh</td>
                            <td>47</td>
                            <td>2009/07/07</td>
                            <td>$87,500</td>
                          </tr>
                          <tr>
                            <td>Shad Decker</td>
                            <td>Data Coordinator</td>
                            <td>London</td>
                            <td>64</td>
                            <td>2012/04/09</td>
                            <td>$138,575</td>
                          </tr>
                          <tr>
                            <td>Shou Itou</td>
                            <td>Software Engineer</td>
                            <td>New York</td>
                            <td>63</td>
                            <td>2010/01/04</td>
                            <td>$125,250</td>
                          </tr>
                          <tr>
                            <td>Sonya Frost</td>
                            <td>Software Engineer</td>
                            <td>Sidney</td>
                            <td>56</td>
                            <td>2012/06/01</td>
                            <td>$115,000</td>
                          </tr>
                          <tr>
                            <td>Suki Burks</td>
                            <td>Junior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>43</td>
                            <td>2013/02/01</td>
                            <td>$75,650</td>
                          </tr>
                          <tr>
                            <td>Tatyana Fitzpatrick</td>
                            <td>Sales Assistant</td>
                            <td>London</td>
                            <td>46</td>
                            <td>2011/12/06</td>
                            <td>$145,600</td>
                          </tr>
                          <tr>
                            <td>Thor Walton</td>
                            <td>Regional Director</td>
                            <td>San Francisco</td>
                            <td>47</td>
                            <td>2011/03/21</td>
                            <td>$356,250</td>
                          </tr>
                          <tr>
                            <td>Tiger Nixon</td>
                            <td>Systems Administrator</td>
                            <td>San Francisco</td>
                            <td>21</td>
                            <td>2009/02/27</td>
                            <td>$103,500</td>
                          </tr>
                          <tr>
                            <td>Timothy Mooney</td>
                            <td>Developer</td>
                            <td>San Francisco</td>
                            <td>30</td>
                            <td>2010/07/14</td>
                            <td>$86,500</td>
                          </tr>
                          <tr>
                            <td>Unity Butler</td>
                            <td>Regional Director</td>
                            <td>San Francisco</td>
                            <td>51</td>
                            <td>2008/11/13</td>
                            <td>$183,000</td>
                          </tr>
                          <tr>
                            <td>Zenaida Frank</td>
                            <td>Javascript Developer</td>
                            <td>Sidney</td>
                            <td>29</td>
                            <td>2011/06/27</td>
                            <td>$183,000</td>
                          </tr>
                          <tr>
                            <td>Zorita Serrano</td>
                            <td>Customer Support</td>
                            <td>Edinburgh</td>
                            <td>27</td>
                            <td>2011/01/25</td>
                            <td>$112,000</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="ibox float-e-margins">
                <div class="ibox-title">
                  <h5>Your daily feed </h5>
                  <div class="ibox-tools"> <a class="collapse-link" data-toggle="collapse"  data-target="#demo6"> <i class="fa fa-chevron-up"></i> <i class="fa fa-chevron-down"></i> </a> <a href="#" data-toggle="dropdown" class="dropdown-toggle" > <i class="fa fa-wrench"></i> </a>
                    <ul class="dropdown-menu dropdown-user">
                      <li><a href="#">Config option 1</a> </li>
                      <li><a href="#">Config option 2</a> </li>
                    </ul>
                    <a class="close-link"> <i class="fa fa-times"></i> </a> </div>
                </div>
                <div class="ibox-content collapse in" id="demo6">
                  <div class="widgets-container ">
                    <div class="feed-activity-list">
                      <div class="feed-element"> <a href="profile.html" class="pull-left"> <img alt="image" class="img-circle" src="{{ asset('quatess/images/teem/a10.jpg')}}"> </a>
                        <div class="media-body "> <small class="pull-right">5m ago</small> <strong>Olivia Wenscombe</strong> posted a new blog. <br>
                          <small class="text-muted">Today 5:60 pm - 12.06.2014</small> </div>
                      </div>
                      <div class="feed-element"> <a href="profile.html" class="pull-left"> <img alt="image" class="img-circle" src="{{ asset('quatess/images/teem/a10.jpg')}}"> </a>
                        <div class="media-body "> <small class="pull-right">2h ago</small> <strong>Robert Angier</strong> posted message on <strong>Olivia Wenscombe</strong> site. <br>
                          <small class="text-muted">Today 2:10 pm - 12.06.2014</small> </div>
                      </div>
                      <div class="feed-element"> <a href="profile.html" class="pull-left"> <img alt="image" class="img-circle" src="{{ asset('quatess/images/teem/a10.jpg')}}"> </a>
                        <div class="media-body "> <small class="pull-right">2h ago</small> <strong>Ariadne</strong> add 1 photo on <strong>Olivia Wenscombe</strong>. <br>
                          <small class="text-muted">2 days ago at 8:30am</small> </div>
                      </div>
                      <div class="feed-element"> <a href="profile.html" class="pull-left"> <img alt="image" class="img-circle" src="{{ asset('quatess/images/teem/a10.jpg')}}"> </a>
                        <div class="media-body "> <small class="pull-right text-navy">5h ago</small> <strong> Alex Smith </strong> started following <strong>Olivia Wenscombe</strong>. <br>
                          <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                          <div class="actions"> <a class="btn btn-xs green"><i class="fa fa-thumbs-up"></i> Like </a> <a class="btn btn-xs red"><i class="fa fa-heart"></i> Love</a> </div>
                        </div>
                      </div>
                      <div class="feed-element"> <a href="profile.html" class="pull-left"> <img alt="image" class="img-circle" src="{{ asset('quatess/images/teem/a10.jpg')}}"> </a>
                        <div class="media-body "> <small class="pull-right">23h ago</small> <strong>Olivia Wenscombe</strong> love <strong>Sophie </strong>. <br>
                          <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small> </div>
                      </div>
                      <div class="feed-element"> <a href="profile.html" class="pull-left"> <img alt="image" class="img-circle" src="{{ asset('quatess/images/teem/a10.jpg')}}"> </a>
                        <div class="media-body "> <small class="pull-right">46h ago</small> <strong>Mike Loreipsum</strong> started following <strong>Olivia Wenscombe</strong>. <br>
                          <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small> </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        @endsection