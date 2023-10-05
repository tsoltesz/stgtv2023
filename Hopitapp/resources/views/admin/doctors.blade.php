<div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Doctors</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>
                              
                            </th>
                            <th> Image </th>
                            <th> Name </th>
                            <th> Email</th>
                            <th> Speciality</th>
                        
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($doctors as $doctor)
                          <tr>
                            <td>
                              
                            </td>
                            <td>
                              <img src="doctorimage/{{$doctor->image}}" />
                            </td>
                            <td> {{$doctor->name}} </td>
                            <td> {{$doctor->email}} </td>
                            <td> {{$doctor->speciality}} </td>

                            <td> <a href="{{route('delete_doctor',$doctor->id)}}" class="btn primary">Delete</a></td>
                
                        
                          </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>