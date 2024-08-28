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

    .yearSupply {
        display: flex;
        justify-content: center;
        align-items: center;
        
    }

    .yearMed {
        font-weight: 700!important;
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
        <h1>Medicine Records</h1>
        <div class="btnArea">
            <button type="button" class="btn btn-primary"><i class="bi bi-printer-fill"></i> Print</button>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ExtralargeModal">New Record</button>  
        </div>
    </div><!-- End Page Title -->
  
    <div class="card">
        <div class="card-body">
            <div class="yearSupply">
                <h3 class="yearMed">MEDICINE SUPPLIES CY YEAR</h3>
            </div>
            <!-- Table with stripped rows -->
            <table class="table table-striped datatable">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NDC</th>
                    <th scope="col">Product/Service Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Quantity Per Boxes</th>
                    <th scope="col">Count(Tablet Per Box)</th>
                    <th scope="col">Total Qt.</th>
                    <th scope="col">Date of Purchases</th>
                    <th scope="col">Expiration Date</th>
                    <th scope="col">Remarks</th>
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
              <h5 class="modal-title">Add Medicine</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form> <!-- Horizontal Form -->
            @csrf
                <div class="modal-body">
                    <div class="personalInfo">
                        <div class="inputField1"> 

                            <div class="column mb-3">
                                <label for="inputNdc" class="col-sm-5 col-form-label">NDC</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputNdc" name="ndc">
                                </div>
                            </div>

                            <div class="column mb-3">
                                <label for="inputProd" class="col-sm-5 col-form-label">Product/Service Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputProd" name="prodName">
                                </div>
                            </div>

                            <div class="column mb-3">
                                <label for="inputDesc" class="col-sm-5 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputDesc" name="description">
                                </div>
                            </div>

                            <div class="column mb-3">
                                <label for="inputBox" class="col-sm-5 col-form-label">Quantity (Per Boxes)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputBox" name="qtBox">
                                </div>
                            </div>
                        </div>

                        <div class="inputField2"> 
                            <div class="column mb-3">
                                <label for="inputCount" class="col-sm-5 col-form-label">Count (Per Tablet)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputCount" name="qtCount">
                                </div>
                            </div>

                            <div class="column mb-3">
                                <label for="inputDatePurchase" class="col-sm-5 col-form-label">Date Of Purchase</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="inputDatePurchase" name="datePurchase">
                                </div>
                            </div>

                            <div class="column mb-3">
                                <label for="inputDateExpired" class="col-sm-5 col-form-label">Expiration Date</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="inputDateExpired" name="dateExpired">
                                </div>
                            </div>
                            
                            <div class="column mb-3">
                                <label for="inputRemarks" class="col-sm-5 col-form-label">Remarks</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputRemarks" name="remarks">
                                </div>
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
{{-- MEDECINE NA IMONG BUHATON DARREN! --}}
</html>