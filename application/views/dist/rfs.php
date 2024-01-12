<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
              <div class="breadcrumb-item">Form</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Ready For Service</h2>
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Input Form</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Cluster ID Temp</label>
                      <input type="text" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                      <label>Cluster ID iForte</label>
                      <input type="text" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                      <label>Area</label>
                      <select class="form-control form-control-sm">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Kota/ Kabupaten</label>
                      <select class="form-control form-control-sm">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Provinsi</label>
                      <select class="form-control form-control-sm">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>URL</label>
                      <input type="text" class="form-control form-control-sm">
                    </div>
                    <!-- <div class="section-title">Select</div> -->
                    <!-- <div class="form-group">
                      <label>Vendor </label>
                      <select class="form-control form-control-sm">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                      </select>
                    </div> -->
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Sumary Ready For Service</h4>
                  </div>
                  <div class="card-body">

                  </div>
                </div>

                <div class="card">
                  <div class="card-header">
                    <h4>Disabled &amp; Read Only</h4>
                  </div>
                  <div class="card-body">
                    <div class="section-title mt-0">Text</div>
                    <div class="form-group">
                      <label>Readonly</label>
                      <input type="text" class="form-control" readonly="">
                    </div>
                    <div class="form-group">
                      <label>Readonly Plain Text</label>
                      <input type="text" class="form-control-plaintext" readonly="" value="Hello!">
                    </div>

                    <div class="section-title">Select</div>
                    <div class="form-group">
                      <label>Select Disabled</label>
                      <select class="form-control" disabled="">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                      </select>
                    </div>

                    <div class="section-title">Checkbox</div>
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
                        <label class="form-check-label" for="defaultCheck2">
                          Disabled checkbox
                        </label>
                      </div>
                    </div>

                    <div class="section-title">Radio</div>
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" value="" id="radioDisabled" disabled>
                        <label class="form-check-label" for="radioDisabled">
                          Disabled radio
                        </label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="card-header">
                    <h4>Inline</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label class="d-block">Inline Checkbox</label>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">1</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">2</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                        <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="d-block">Inline Radio</label>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="inlineradio1" value="option1">
                        <label class="form-check-label" for="inlineradio1">1</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="inlineradio2" value="option2">
                        <label class="form-check-label" for="inlineradio2">2</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="inlineradio3" value="option3" disabled>
                        <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="card-header">
                    <h4>Horizontal Form</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Address</label>
                      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress2">Address 2</label>
                      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control">
                          <option selected>Choose...</option>
                          <option>...</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                      </div>
                    </div>
                    <div class="form-group mb-0">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                          Check me out
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-primary">Submit</button>
                  </div>
                </div>

                <div class="card">
                  <div class="card-header">
                    <h4>Horizontal Form</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                      </div>
                    </div>
                    <fieldset class="form-group">
                      <div class="row">
                        <div class="col-form-label col-sm-3 pt-0">Radios</div>
                        <div class="col-sm-9">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                            First radio
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                            <label class="form-check-label" for="gridRadios2">
                              Second radio
                            </label>
                          </div>
                          <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                            <label class="form-check-label" for="gridRadios3">
                              Third disabled radio
                            </label>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                    <div class="form-group row">
                      <div class="col-sm-3">Checkbox</div>
                      <div class="col-sm-9">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="gridCheck1">
                          <label class="form-check-label" for="gridCheck1">
                          Example checkbox
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">       
                    <button type="submit" class="btn btn-primary">Sign in</button>
                  </div>
                </div>

                <div class="card">
                  <div class="card-header">
                    <h4>Custom Forms</h4>
                  </div>
                  <div class="card-body">
                    <div class="section-title mt-0">Checkbox</div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck1">
                      <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                    </div>

                    <div class="section-title">Checkbox</div>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
                    </div>

                    <div class="section-title">Inline</div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                      <label class="custom-control-label" for="customRadioInline1">Toggle this custom radio</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                      <label class="custom-control-label" for="customRadioInline2">Or toggle this other custom radio</label>
                    </div>

                    <div class="section-title">Disabled</div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheckDisabled" disabled>
                      <label class="custom-control-label" for="customCheckDisabled">Check this custom checkbox</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" name="radioDisabled" class="custom-control-input" disabled>
                      <label class="custom-control-label">Toggle this custom radio</label>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Learn More</h4>
                  </div>
                  <div class="card-body">
                    <div class="jumbotron text-center">
                      <h2>Learn More</h2>
                      <p class="lead text-muted mt-3">All the above form elements are the default of bootstrap and you can learn them on the official documentation provided by Bootstrap.</p>
                      <a class="btn btn-primary mt-3" href="https://getbootstrap.com/docs/4.0/components/forms/" target="_blank" role="button">Learn more</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
<?php $this->load->view('dist/_partials/footer'); ?>