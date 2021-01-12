@extends('layouts.app')

@section('content')
    <div class="row">
    <div class="col-md-10">
        <div class="panel panel-default">
            <div class="panel-heading">Contacts</div>

            <div class="panel-body">
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Sl</th>
                      
                        <th scope="col">Name </th>
                        <th scope="col">Email</th>
                         <th scope="col">Mobile No</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Professor Dr. A.T.M Mahabubur Rahman (Dean)</td>
                        <td>dean.cse@diu-bd.net</td>
                        <td>01720-557279</td>
                  
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Asso. Prof. Md. Abdul Based (Chairman dept. of CSE)</td>
                        <td>chairman.cse@diu-bd.net</td>
                        <td>01716-505902</td>
                  
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Asso. Prof. MS. Jahanara Akhter</td>
                        <td>Jahanara.cse@diu-bd.net</td>
                        <td>01715-180979</td>
                  
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>Ass. Prof. Md. Anisur Rahman Pramanik</td>
                        <td>anisur.cse@diu-bd.net</td>
                        <td>01920-033252</td>
                  
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <td>Ass. Prof. Md. Habibullah Belali</td>
                        <td>belali.cse@diu-bd.net</td>
                        <td>01720-557279</td>
                  
                      </tr>
                      <tr>
                        <th scope="row">6</th>
                        <td>Ass. Prof. Md. Tahzib ul islam</td>
                        <td>tahzib.cse@diu-bd.net</td>
                        <td>01717-041584</td>
                  
                      </tr>
                      <tr>
                        <th scope="row">7</th>
                        <td>Ass. Prof. Ms. Saraboni Borua </td>
                        <td>sraboni.cse@diu-bd.net</td>
                        <td>01683-180384</td>
                  
                      </tr>
                      <tr>
                        <th scope="row">8</th>
                        <td>Ass. Prof. Md. Solaiman Mia</td>
                        <td>solaiman.cse@diu-bd.net</td>
                        <td>01976-524626</td>
                  
                      </tr>
                      <tr>
                        <th scope="row">9</th>
                        <td>Mr. Samrat Kumar Day, Lecturer</td>
                        <td>smrat.cse@diu-bd.net</td>
                        <td>01823-267937</td>
                  
                      </tr>
                      <tr>
                        <th scope="row">10</th>
                        <td>Md. Mahmudul Hasan, Lecturer</td>
                        <td>mahamudul.cse@diu-bd.net</td>
                        <td>01739-966934</td>
                  
                      </tr>
                      <tr>
                        <th scope="row">11</th>
                        <td>Md. Saifuzzaman, Lecturer</td>
                        <td>sifuzzaman.cse@diu-bd.net</td>
                        <td>01913-215790</td>
                  
                      </tr>
                      <tr>
                        <th scope="row">12</th>
                        <td>Md. Kawsar Ahmed, Lecturer</td>
                        <td>kawsar.cse@diu-bd.net</td>
                        <td>01757-074820</td>
                  
                      </tr>
                      <tr>
                        <th scope="row">13</th>
                        <td>Md. Ashraful Islam, Lecturer</td>
                        <td>ashraful.cse@diu-bd.net</td>
                        <td>01776-019109</td>
                  
                      </tr>
                      <tr>
                        <th scope="row">14</th>
                        <td>Md. Al Imran, Lecturer</td>
                        <td>imran.cse@diu-bd.net</td>
                        <td>01710-242332</td>
                  
                      </tr>
                      <tr>
                        <th scope="row">15</th>
                        <td>Md. Riaz Uddin, Lecturer</td>
                        <td>riaz.cse@diu-bd.net</td>
                        <td>01675-909668</td>
                  
                      </tr>
                      <tr>
                        <th scope="row">16</th>
                        <td>Md. Zahidul Islam, Lecturer</td>
                        <td>czahidul.cse@diu-bd.net</td>
                        <td>01724-240332</td>
                  
                      </tr>
                      <tr>
                        <th scope="row">17</th>
                        <td>Md. Firoz Sarker, Lecturer</td>
                        <td>firoz.cse@diu-bd.net</td>
                        <td>01734-088868</td>
                  
                      </tr>
                        <tr>
                        <th scope="row">18</th>
                        <td>Ms. Arpita Howlader, Lecturer</td>
                        <td>arpita.cse@diu-bd.net</td>
                        <td>01833-760618</td>
                  
                      </tr>
                        <tr>
                        <th scope="row">19</th>
                        <td>Mr. Suman Mazumder, Lecturer</td>
                        <td>suman.cse@diu-bd.net</td>
                        <td>01721-132051</td>
                  
                      </tr>
                        <tr>
                        <th scope="row">20</th>
                        <td>Md. Shariful Islam, Lecturer</td>
                        <td>shafiur.cse@diu-bd.net</td>
                        <td>01747-612143</td>
                  
                      </tr>
                        <tr>
                        <th scope="row">21</th>
                        <td>Md. SK Fahim Abrar, Lecturer</td>
                        <td>fahim.cse@diu-bd.net</td>
                        <td>01828-541244</td>
                  
                      </tr>
                        <tr>
                        <th scope="row">22</th>
                        <td>Md. Shibly Sadique, Lecturer</td>
                        <td>shibly.cse@diu-bd.net</td>
                        <td>01716-865751</td>
                  
                      </tr>
                        <tr>
                        <th scope="row">23</th>
                        <td>Md. Ashfaul Islam Tonmoy, Lecturer</td>
                        <td>ashfaqul.cse@diu-bd.net</td>
                        <td>01515-600336</td>
                  
                      </tr>
                        <tr>
                        <th scope="row">24</th>
                        <td>Md. Mahbubur Rahman, Lecturer</td>
                        <td>mahbubur.cse@diu-bd.net</td>
                        <td>01521-238777</td>
                  
                      </tr>
                        <tr>
                        <th scope="row">25</th>
                        <td>Md. Khandaker Mohiuddin, Lecturer</td>
                        <td>khandakar.cse@diu-bd.net</td>
                        <td>01520- 102813</td>
                  
                      </tr>
                        <tr>
                        <th scope="row">26</th>
                        <td>Md. Ibrahim Khalil, Lecturer</td>
                        <td>ibrahim.cse@diu-bd.net</td>
                        <td>01813-853689</td>
                  
                      </tr>
                        <tr>
                        <th scope="row">27</th>
                        <td>Md. Abu Sayed, Lecturer</td>
                        <td>sayed.cse@diu-bd.net</td>
                        <td>01521-218959</td>
                  
                      </tr>
                      
                        <tr>
                        <th scope="row">28</th>
                        <td>Ms. Nazis Sultana, Lecturer</td>
                        <td>nazis.cse@diu-bd.net</td>
                        <td>01793-777064</td>
                  
                      </tr>
                      
                        <tr>
                        <th scope="row">29</th>
                        <td>Md. AL Bashir, Lecturer</td>
                        <td>bashir.cse@diu-bd.net</td>
                        <td>01913-256789</td>
                  
                      </tr>
                      
                        <tr>
                        <th scope="row">30</th>
                        <td>Md. Rafid Mostafiz, Lecturer</td>
                        <td>rafid.cse@diu-bd.net</td>
                        <td>01732-215673</td>
                  
                      </tr>
                  
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    </div>
@endsection
