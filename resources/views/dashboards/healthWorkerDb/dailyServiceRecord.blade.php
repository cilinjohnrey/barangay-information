@include('layouts.headHealthWorkers')
<style>
    .card-body {
        overflow: auto;
    }
    
    .pagetitle {
        display: flex;
        justify-content: space-between;
    }

    .form-control {
        width: 450px;
    }

    .modal-body {
        display: flex;
        flex-direction: column
    }

    .personalInfo {
        display: flex;
        justify-content: space-evenly;
    }

    .inputGroup {
        display: flex;
        justify-content: space-evenly;
    }

    .grpField {
        width: 150px!important;
    }

    .smokers {
        border: solid 1px #dee2e6;
        display: flex;
        align-items: center;
        padding: 10px;
        margin-left: 2px;
        border-radius: 0.375rem;
        width: 100%;
    }

    .smokersCon {
    
    }

    .grpField2 {
        width: 100%!important;
    }

    .inputGroup2 {
        display: flex;
        width: 100%!important;
        overflow: hidden;
        justify-content: space-between;
        align-items: center;
        
    }

    .medicines {
        width: 70%!important;
    }

    .quants {
        width: 300px!important;
    }

    .signature-container {
        position: relative;
    }

    #signaturePad {
        width: 100%;
        height: 200px;
        border: 1px solid #ccc;
    }

</style>
<body>

  <!-- ======= Header ======= -->
    @include('layouts.headerHealthWorkers')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
    @include('layouts.sidebarHealthWorkers')
  <!-- End Sidebar -->

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Daily Service Record</h1>
        <div class="btnArea">
            <button type="button" class="btn btn-primary"><i class="bi bi-printer-fill"></i> Print</button>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ExtralargeModal">New Record</button>  
        </div>
    </div><!-- End Page Title -->
  
    <div class="card">
        <div class="card-body">
  
            <!-- Table with stripped rows -->
            <table class="table table-striped datatable">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Date Visit</th>
                    <th scope="col">Family Name</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Middle Name</th>
                    <th scope="col">BirthDate</th>
                    <th scope="col">Age</th>
                    <th scope="col">Sex</th>
                    <th scope="col">Purok</th>
                    <th scope="col">BP</th>
                    <th scope="col">Temp</th>
                    <th scope="col">HT</th>
                    <th scope="col">WT</th>
                    <th scope="col">Complaints</th>
                    <th scope="col">Smoker</th>
                    <th scope="col">Alcohol</th>
                    <th scope="col">Medicine Given</th>
                    <th scope="col">Patient's Signature</th>
                </tr>
                </thead>
                <tbody>
                
                </tbody>
            </table>
          <!-- End Table with stripped rows -->
        </div>
    </div>

      <!-- Extra Large Modal -->
      <div class="modal fade" id="ExtralargeModal" tabindex="-1">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Daily Service Record</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form> <!-- Horizontal Form -->
            @csrf
                <div class="modal-body">
                    <div class="personalInfo">
                        <div class="inputField1"> 
                            <div class="column mb-3">
                                <label for="inputDate" class="col-sm-5 col-form-label">Date Visit</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="inputDate" name="dateVisit">
                                </div>
                            </div>
                            <div class="column mb-3">
                                <label for="inputFname" class="col-sm-5 col-form-label">First Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputFname" name="fname">
                                </div>
                            </div>
                            <div class="column mb-3">
                                <label for="inputMname" class="col-sm-5 col-form-label">Middle Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputMname" name="mname">
                                </div>
                            </div>
                            <div class="column mb-3">
                                <label for="inputLname" class="col-sm-5 col-form-label">Family Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputLname" name="lname">
                                </div>
                            </div>
                        </div>

                        <div class="inputField2"> 
                            <div class="column mb-3">
                                <label for="inputSuffix" class="form-label">Suffix (If none leave it)</label>
                                <select id="inputSuffix" class="form-select" name="suffix">
                                <option selected disabled>Choose...</option>
                                <option value="Jr.">Jr.</option>
                                <option value="I">I</option>
                                <option value="II.">II</option>
                                <option value="III">III</option>
                                <option value="IV">IV</option>
                                <option value="V">V</option>
                                </select>
                            </div>

                            <div class="column mb-3">
                                <label for="inputBdate" class="col-sm-5 col-form-label">BirthDate</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="inputBdate" name="bDate">
                                </div>
                            </div>

                            <div class="column mb-3">
                                <label for="inputSex" class="form-label">Sex</label>
                                <select id="inputSex" class="form-select" name="sex">
                                <option selected value="Male">Male</option>
                                <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="column mb-3">
                                <label for="inputPurok" class="form-label">Purok</label>
                                <select id="inputPurok" class="form-select" name="purok">
                                <option selected disabled>Choose...</option>
                                <option value="Tugas">Tugas</option>
                                <option value="Tambis">Tambis</option>
                                <option value="Mahogany">Mahogany</option>
                                <option value="Guyabano">Guyabano</option>
                                <option value="Mansinitas">Mansinitas</option>
                                <option value="Ipil-ipil">Ipil-ipil</option>
                                <option value="Lubi">Lubi</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="medicalInfo">
                        <div class="inputField3"> 
                            <div class="inputGroup">
                                <div class="column mb-3">
                                    <label for="inputBp" class="col-sm-2 col-form-label">BP</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control grpField" id="inputBp" name="bP">
                                    </div>
                                </div>

                                <div class="column mb-3">
                                    <label for="inputTemp" class="col-sm-2 col-form-label">Temperature</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control grpField" id="inputTemp" name="temp">
                                    </div>
                                </div>

                                <div class="column mb-3">
                                    <label for="inputHeight" class="col-sm-2 col-form-label">Height</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control grpField" id="inputHeight" name="ht">
                                    </div>
                                </div>

                                <div class="column mb-3">
                                    <label for="inputWeight" class="col-sm-2 col-form-label">Weight</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control grpField" id="inputWeight" name="wt">
                                    </div>
                                </div>
                            </div>

                            <div class="column mb-3">
                                <label for="inputComplaints" class="col-sm-2 col-form-label">Complaints</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control grpField2" id="inputComplaints" name="complaints">
                                </div>
                            </div>

    
                            <fieldset class="row mb-3 smokers">
                                <legend class="col-form-label col-sm-2 pt-0">Smoker</legend>
                                <div class="col-sm-10 smokersCon">
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="smoker" id="smokerYes" value="Yes" checked>
                                    <label class="form-check-label" for="smokerYes">
                                        Yes
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="smoker" id="smokerNo" value="No">
                                    <label class="form-check-label" for="smokerNo">
                                        No
                                    </label>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="row mb-3 smokers">
                                <legend class="col-form-label col-sm-2 pt-0">Alcohol</legend>
                                <div class="col-sm-10 smokersCon">
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="alcohol" id="alcoholYes" value="Yes" checked>
                                    <label class="form-check-label" for="alcoholYes">
                                        Yes
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="alcohol" id="alcoholNo" value="No">
                                    <label class="form-check-label" for="alcoholNo">
                                        No
                                    </label>
                                    </div>
                                </div>
                            </fieldset>

                            <div class="inputGroup2">
                                <div class="column mb-3 medicines">
                                    <label for="inputMed" class="form-label">Medicine Given</label>
                                    <select id="inputMed" class="form-select" name="meds">
                                        <option selected disabled>Choose...</option>
                                    </select>
                                </div>

                                <div class="column mb-3 quants">
                                    <label for="inputQuantity" class="col-sm-2 col-form-label">Quantity</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control quants" id="inputQuantity" name="quantity">
                                    </div>
                                </div>
                            </div>

                            <div class="signature-container">
                                <label for="signaturePad" class="form-label">Signature</label>
                                <canvas id="signaturePad"></canvas>
                                <button type="button" id="clearSignature" class="btn btn-danger mt-2">Clear</button>
                            </div>

                        </div>
                    </div>
                </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary">Save</button>
            </div>
        </form><!-- End Horizontal Form -->
          </div>
        </div>
      </div><!-- End Extra Large Modal-->

</main><!-- End #main -->

  @include('layouts.footerHealthWorkers')
</body>
</html>