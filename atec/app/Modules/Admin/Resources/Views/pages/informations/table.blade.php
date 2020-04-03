<table class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Locale</th>
                          <th>Name</th>
                          <th>Text</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($info as $info)
                      @foreach($info->translations as $trans)
                        <tr>
                        <td>{!! $info->id !!}</td>
                        <td>{!! $trans->locale !!}</td>
                        <td>{!! $info->name !!}</td>
                        <td>{{  Str::limit($trans->text,10) }}</td>
                        
                          <td>
                            <a href="{{route('admin.informations.edit', [$info->id])}}" class="btn"><i class="far fa-edit" style="font-size:17px; color:#b66dff;" ></i></a>
                          </td>
                          
                          <td>
                          {!! Form::open(['route' => ['admin.informations.destroy',$info->id], 'method' => 'delete']) !!}
                                {!! Form::button('<i class="fa fa-trash-alt" style="font-size:17px; color:#b66dff;"></i>', ['type' => 'submit', 'class' => 'btn  btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                          {!! Form::close() !!}
                          </td>
                        </tr>
                        @endforeach 
                        @endforeach 
                      </tbody>
                    </table>