<div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Services</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>
                              
                            </th>
                            <th> Image </th>
                            <th> Name </th>
                            <th> Description</th>
                            
                        
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($services as $service)
                          <tr>
                            <td>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </td>
                            <td>
                              <img src="serviceimage/{{$service->image}}" />
                            </td>
                            <td> {{$service->name}} </td>
                            <td> {{$service->description}} </td>
                                 
                          </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>