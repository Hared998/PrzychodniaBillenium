@extends('layouts.app')

@section('content')

<div class="kalendarzlekarza-content">
    <div class="row">
        <div class="kalendarzlekarza-info col-3 text-center">
            <h2>{{$lekarz->firstName}}</h2>
            <h2>{{$lekarz->lastName}}</h2>
            <h3>Specjalizacja: {{$lekarz->Specialization}}</h3>
        </div>
        <div class="kalendarzlekarza-calendar col-9">
            <div class="row">
				<div class="col-md-12">
					<div class="content w-100 text-center">
				    <div class="calendar-container">
				      <div class="calendar">
				        <div class="year-header">
				          <span class="left-button fa fa-chevron-left" id="prev"> </span>
				          <span class="year" id="label"></span>
				          <span class="right-button fa fa-chevron-right" id="next"> </span>
				        </div>
				        <table class="months-table w-100">
				          <tbody>
				            <tr class="months-row">
				              <td class="month">Sty</td>
				              <td class="month">Lut</td>
				              <td class="month">Mar</td>
				              <td class="month">Kwi</td>
				              <td class="month">Maj</td>
				              <td class="month">Cze</td>
				              <td class="month">Lip</td>
				              <td class="month">Sie</td>
				              <td class="month">Wrz</td>
				              <td class="month">Paź</td>
				              <td class="month">Lis</td>
				              <td class="month">Gru</td>
				            </tr>
				          </tbody>
				        </table>

				        <table class="days-table w-100">
				          <td class="day">Pon</td>
				          <td class="day">Wt</td>
				          <td class="day">Śr</td>
				          <td class="day">Czw</td>
				          <td class="day">Pt</td>
				          <td class="day">Sob</td>
				          <td class="day">Ndz</td>
				        </table>
				        <div class="frame">
				          <table class="dates-table w-100">
			              <tbody class="tbody">
			              </tbody>
				          </table>
				        </div>

				      </div>
				    </div>
				    <div class="event-container">
                        <form id="wizyta" action="#">
                            <label for="dostepne-godziny">Wybierz godzinę: </label><br>
                            <select id="dostepne-godziny" name="godziny" form="wizyta">
                                <option value="9:00">9:00</option>
                                <option value="9:40">9:40</option>
                                <option value="10:20">10:20</option>
                                <option value="11">11:00</option>
                            </select>
                            <div class="txt-field">
                                <label for="leki">Stosowane leki</label>
                                <input type="text" name="leki">
                            </div>
                            <div class="txt-field">
                                <label for="objawy">Objawy</label>
                                <input type="text" name="objawy">
                            </div>
                            <input id="data-kalendarz" type="text" name="data" style="display: none;">
                            <button type="submit">Zapisz się</button>
                        </form>
				    </div>
				</div>
			</div>
        </div>
    </div>
</div>
<script src="{{ asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/popper.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script>
    $(document).ready(function() {
        $(document).on('click', '.table-date', function(){
            var dzien = $(this).text();
            var miesiac = $('.month.active-month').text();
            var rok = $('.year').text();
            if(miesiac === "Sty") {
                miesiac = '01';
            }
            else if(miesiac === "Sty") {
                miesiac = '01';
            }
            else if(miesiac === "Lut") {
                miesiac = '02';
            }
            else if(miesiac === "Mar") {
                miesiac = '03';
            }
            else if(miesiac === "Kwi") {
                miesiac = '04';
            }
            else if(miesiac === "Maj") {
                miesiac = '05';
            }
            else if(miesiac === "Cze") {
                miesiac = '06';
            }
            else if(miesiac === "Lip") {
                miesiac = '07';
            }
            else if(miesiac === "Sie") {
                miesiac = '08';
            }
            else if(miesiac === "Wrz") {
                miesiac = '09';
            }
            else if(miesiac === "Paź") {
                miesiac = '10';
            }
            else if(miesiac === "Lis") {
                miesiac = '11';
            }
            else if(miesiac === "Gru") {
                miesiac = '12';
            }

            var data = rok+"-"+miesiac+"-"+dzien;

            $("#data-kalendarz").val(data);
        });
    });
</script>
@endsection
