<ul class="nav nav-pills justify-content-center">
    <li class="nav-item">
        <a class="nav-link @if($active == 'Detailbantukami') active @endif" 
            aria-current="page" 
            href="{{ route('Detailbantukami.show', $id ) }}">
            Timeline
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if($active == 'Detailupdateinfo') active @endif" 
            href="{{ route('Detailupdateinfo.show', $id ) }}">
            Update Info
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if($active == 'Detailtimbantuan') active @endif" 
            href="{{ route('Detailtimbantuan.show', $id ) }}">
            Tim Bantuan
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if($active == 'Detailrekeningdonasi') active @endif" 
            href="{{ route('Detailrekeningdonasi.show', $id ) }}">
            Rekening Donasi
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if($active == 'Detaildonasi') active @endif" 
            href="{{ route('Detaildonasi.show', $id ) }}">
            Donasi
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if($active == 'Detailpembelanjaandana') active @endif" 
            href="{{ route('Detailpembelanjaandana.show', $id ) }}">
            Pembelanjaan Dana
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if($active == 'Detailkorbanbencana') active @endif"
            href="{{ route('Detailkorbanbencana.show', $id ) }}">
            Korban Bencana
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if($active == 'Detailtitikpengungsian') active @endif" 
            href="{{ route('Detailtitikpengungsian.show', $id ) }}">
            Titik Pengungsian
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if($active == 'Detailtitikblokir') active @endif" 
            href="{{ route('Detailtitikblokir.show', $id ) }}">
            Titik Blokir
        </a>
    </li> 
</ul>