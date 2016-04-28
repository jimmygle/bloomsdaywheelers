@extends('layouts.master')

@section('content')

    <h1>Bloomsday Elite Wheelchair Division <small>May 1st, 2016</small></h1>

    {{ Html::bsPanel(
        'Travel Arrangement Stipulations', '
        <ul>
            <li>Wheelchair division travel funds are limited. We will assist as many as possible on a basically first come first served basis.</li>
            <li>If you are within driving distance (450 miles one way), we will cover your car travel cost completely.</li>
            <li>Complementary rooms are available for Friday, Saturday and Sunday nights on a first response, first served basis. We must book two racers per room, no exceptions. If you want to come in sooner and/or stay longer, let us know and we will set it up for you. Other people may stay in your room with you (coaches, spouses, friends), but your racer roommate must agree to the arrangements. Some advance contacts on your part will simplify this part of the weekend schedule.</li>
            <li>You must bring either a major credit card or sufficient cash to cover any incidental expenses (room service, phone, etc.). Bloomsday only covers the basic room rate.</li>
            <li>Travel is figured point-to-point from one airport. If you want other arrangements we can set them up, but you must cover additional costs.</li>
        </ul>'
    ) }}

    {{ Html::bsPanel('Wheelchair Division "Rookies"', '<p>If this is your first time competing in the Bloomsday wheelchair division you are required to ride through the course on the Rookie Tour bus on Saturday at 12:45 PM. The bus will depart the race headquarters hotel on Spokane Falls Blvd. (100 meters south of the hotel lobby). For safety reasons Bloomsday requires that every wheeler see the course before racing. If you miss the rookie tour and do not have specific approval from the Wheelchair Division Coordinator you will not be permitted to line up on Sunday morning.</p>') }}

    {{ Html::bsPanel(
        'Release & Waiver', '
        <p>I know that participating in Bloomsday is a potentially hazardous activity. I know I should not enter and participate unless I am medically able and properly trained. I also know that, although law enforcement protection will be provided, there may be volunteers, spectators, motor vehicles, bicycles, skateboards and the like on the Bloomsday course. With this understanding, I assume any and all risks associated with participating in Bloomsday including, but not limited to, tripping, falls, running off the roadways which comprise the Bloomsday course, contact with other participants, volunteers, spectators or with motor vehicles, bicycles, skateboards and the like, the effects of the weather, including high heat, and/or humidity, and the condition of the Bloomsday course, including, but not limited to, curbs, mile markers, bands, parked cars, water station tables, water cups, water, timing mats, uneven pavement, potholes and rocks, gravel and objects on the Bloomsday course surface, all such risks being known and appreciated by me. I also know that the Bloomsday course will close at 1:30 p.m. I agree that if I am on the Bloomsday course at that time, I will move off the roadway to allow traffic to proceed and will observe all traffic laws if I choose to complete the Bloomsday course. Knowing and appreciating these risks and in consideration of your acceptance of my entry, I hereby for myself, my heirs, legal representatives, or anyone else claiming on my behalf, covenant not to sue, and waive, release and discharge the Lilac Bloomsday Association, the City of Spokane, Spokane County, Bloomsday volunteers and sponsors together with their agents, employees, assigns or anyone else acting for or on behalf of any of the foregoing entities, from any and all claims of liability for death, personal injury or damage of any kind or nature whatsoever arising out of or in the course of my participation in Bloomsday. This Release and Waiver extends to all claims of every kind whatsoever, foreseen or unforeseen, known or unknown.</p>
        <p>If I am an Operator or Occupant of a Stroller or Assisted Wheelchair, I agree that I will walk the entire Bloomsday course and that I am fully responsible for my own safety and the safety of any occupant of the stroller or assisted wheelchair, and I acknowledge all responsibility for any claim made by any other Bloomsday participant arising from any contact with my stroller or assisted wheelchair.</p>
        <p>I also understand that in the event that Bloomsday cannot be held as scheduled due to an act of God or other circumstances, I am not entitled to a refund of any money paid by me to participate. I also hereby consent to permit, and accept responsibility for emergency treatment in the event of injury or illness. I further grant full permission to the Lilac Bloomsday Association and/or any person or entity authorized by it to use my name, age, birth date, city, finish place, and finish time in the public domain. I further grant full permission for the Lilac Bloomsday Association to use any photographs, videotapes, motion pictures, recordings, or any other record of this event, which may include me, for any purpose.</p>
        <h4>AUTHORITY TO REGISTER AND/OR TO ACT AS AGENT.</h4>
        <p>You represent and warrant to Lilac Bloomsday Association that you have full legal authority to complete this registration. If you are registering third parties, you represent and warrant that you have been duly authorized to act as agent on behalf of such parties in performing this registration. By proceeding with this registration, you agree that the terms of this Liability and Waiver Agreement shall apply equally to you and to any third parties for whom you are acting as agent. You also agree that you have presented the full language of the terms of this Liability and Waiver Agreement to the third parties for whom are you are acting as agent, and the third parties have agreed to be bound by said terms.</p>',
        null, null, null, true, '300px'
    ) }}

    <p class="text-center">
        <a href="{{ url('register') }}" class="btn btn-primary btn-lg">
            <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;&nbsp;
            I Agree &ndash; Continue to Registration
        </a>
    </p>

@endsection