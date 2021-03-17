@extends('layouts.app')

@section('title-block')Производство@endsection

@section('hero')
    @parent
    <div class="container py-5 border-bottom border-success border-2">
        <p class="h1">Наши проекты</p>
    </div>
@endsection

@section('content')
    <div class="row py-3">
        <div class="col-12 content">
            <p>I am a bunch of content here.. <b>Scroll this page to see the menu stick!</b> The height is unknown or dynamic!! Sunt autem quidam e nostris, qui haec subtilius velint tradere et negent satis esse, quid bonum sit aut quid malum, sensu iudicari,
                sed animo etiam ac ratione intellegi posse et voluptatem ipsam per se esse expetendam et dolorem ipsum per se esse fugiendum. itaque aiunt hanc quasi naturalem atque insitam in animis nostris inesse notionem, ut alterum esse appetendum,
                alterum aspernandum sentiamus. Alii autem, quibus ego assentior, cum a philosophis compluribus permulta dicantur, cur nec voluptas in bonis sit numeranda nec in malis dolor, non existimant oportere nimium nos causae confidere, sed et argumentandum
                et accurate disserendum et rationibus conquisitis de voluptate et dolore disputandum putant.</p>
            <p>3 wolf moon retro jean shorts chambray sustainable roof party. Shoreditch vegan artisan Helvetica. Tattooed Codeply Echo Park Godard kogi, next level irony ennui twee squid fap selvage. Meggings flannel Brooklyn literally small batch, mumblecore
                PBR try-hard kale chips. Brooklyn vinyl lumbersexual bicycle rights, viral fap cronut leggings squid chillwave pickled gentrify mustache. 3 wolf moon hashtag church-key Odd Future. Austin messenger bag normcore, Helvetica Williamsburg
                sartorial tote bag distillery Portland before they sold out gastropub taxidermy Vice.</p>
            <p>Sunt autem quidam e nostris, qui haec subtilius velint tradere et negent satis esse, quid bonum sit aut quid malum, sensu iudicari, sed animo etiam ac ratione intellegi posse et voluptatem ipsam per se esse expetendam et dolorem ipsum per
                se esse fugiendum. itaque aiunt hanc quasi naturalem atque insitam in animis nostris inesse notionem, ut alterum esse appetendum, alterum aspernandum sentiamus. Alii autem, quibus ego assentior, cum a philosophis compluribus permulta dicantur,
                cur nec voluptas in bonis sit numeranda nec in malis dolor, non existimant oportere nimium nos causae confidere, sed et argumentandum et accurate disserendum et rationibus conquisitis de voluptate et dolore disputandum putant.</p>
            <p>Sunt autem quidam e nostris, qui haec subtilius velint tradere et negent satis esse, quid bonum sit aut quid malum, sensu iudicari, sed animo etiam ac ratione intellegi posse et voluptatem ipsam per se esse expetendam et dolorem ipsum per
                se esse fugiendum. itaque aiunt hanc quasi naturalem atque insitam in animis nostris inesse notionem, ut alterum esse appetendum, alterum aspernandum sentiamus. Alii autem, quibus ego assentior, cum a philosophis compluribus permulta dicantur,
                cur nec voluptas in bonis sit numeranda nec in malis dolor, non existimant oportere nimium nos causae confidere, sed et argumentandum et accurate disserendum et rationibus conquisitis de voluptate et dolore disputandum putant.</p>
        </div>
    </div>
@endsection

@section('aside')
    @parent
    <div class="nav flex-column">
        <a href="/mechanicalres" class="nav-link border-bottom border-success pl-0 green">Механическая обработка</a>
        <a href="/heattreat" class="nav-link border-bottom border-success pl-0 green">Термическая обработка</a>
        <a href="/engineeringsup" class="nav-link border-bottom border-success pl-0 green">Инженерное сопровождение</a>
        <a href="/projects" class="nav-link pl-0 green">Образцы продукции</a>
    </div>
@endsection
