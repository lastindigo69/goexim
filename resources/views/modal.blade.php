<!-- modal create schedule Import -->
<div class="modal fade" id="sch_imp" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Schedule import</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="editform" method="POST" enctype='multipart/form-data'>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Shipment Name</label>
              <div class="col-sm-5">
               <select style="width:100%" class="form-control js-example-basic-single" name="id_shipment_name">           
                @foreach($shipment_name as $row)
                  <option value="{{$row->id_shipment_name}}">{{$row->shipment_name}}</option>
                @endforeach                                  
                </select>                              
              </div>
            </div>            
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Category</label>
              <div class="col-sm-5">
               <select style="width:100%" class="form-control js-example-basic-single" name="id_category">                
                  @foreach($category as $row)
                  <option value="{{$row->id_category}}">{{$row->category}}</option>
                  @endforeach                                  
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Desc Of Goods</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="desc_of_good">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Invoice</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="invoice">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Currency</label>
              <div class="col-sm-5">
                <select style="width:100%" class="form-control js-example-basic-single" name="id_currency">                
                  @foreach($currency as $row)
                  <option value="{{$row->id_currency}}">{{$row->currency}}</option>
                  @endforeach                                  
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Amount</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="amount" id="amount-name">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Supplier</label>
              <div class="col-sm-5">
                <select style="width:100%" class="form-control js-example-basic-single" name="id_supplier">                
                  @foreach($supplier as $row)
                  <option value="{{$row->id_supplier}}">{{$row->supplier}}</option>
                  @endforeach                                  
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Origin</label>
              <div class="col-sm-5">
                <select style="width:100%" class="form-control js-example-basic-single" name="id_origin">                
                  @foreach($origin as $row)
                  <option value="{{$row->id_origin}}">{{$row->origin}}</option>
                  @endforeach                                  
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Ship</label>
              <div class="col-sm-5">
                <select style="width:100%" class="form-control js-example-basic-single" name="id_ship">                
                  @foreach($ship as $row)
                  <option value="{{$row->id_ship}}">{{$row->ship}}</option>
                  @endforeach                                  
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Container Number</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="cont_number">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Nama Alat Angkut</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="nama_alat_angkut">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">MAWB/MBL</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="mbl">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">BL/AWB</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="hbl">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Forwader</label>
              <div class="col-sm-5">
                <select style="width:100%" class="form-control js-example-basic-single" name="id_forwader">                
                  @foreach($forwader as $row)
                  <option value="{{$row->id_forwader}}">{{$row->forwader}}</option>
                  @endforeach                                  
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">ETD</label>
              <div class="col-sm-5">
                <input type="date" class="form-control" name="etd" id="etd">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">ETA</label>
              <div class="col-sm-5">
                <input type="date" class="form-control" name="eta">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">ETA AIIA</label>
              <div class="col-sm-5">
                <input type="date" class="form-control" name="eta_aiia">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Pay Duty & Tax</label>
              <div class="col-sm-5">
                <input type="date" class="form-control" name="duty">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">CC Plan</label>
              <div class="col-sm-5">
                <input type="date" class="form-control" name="cc">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">GW</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="gw">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Fubikasi</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="fubikasi">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Kemasan</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="kemasan">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Remark</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="remark">
              </div>
            </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </form></div>
    </div>
  </div>
</div>
<!-- end of modal create schedule Import -->