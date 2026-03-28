@props([
    'name'  => 'icon_class',
    'value' => '',
    'label' => 'Icon',
])

@php
    $uid      = 'icon-picker-' . str_replace(['[',']'], '-', $name);
    $flaticons = ['inbox','map','quotes','marketing','shield','database','voip','cloud','compliant','compliance','webpage','location','email','call','advertising','address','privacy','crown','security','award','approved','expert','success','team','support','twitter','instagram','mail','arroba','home','minus','play','chat','profit','settings','feedback','result','right','sketch','business','next','discussion','reliability','operation','process','receipt','checked','dashboard','data','check','write','boxes','link','clock','target','experience','brain','bulb','medal','avatar','headphone','quote','phone'];
    $flaticons2 = ['map-location','mail','phone','vector-idea','management','folder','smart-city','pencil-and-ruler','stats','portfolio','cv','team','virtual-tour','sprint','process','process-1','quotes','file-outline-with-text-lines','calendar','customer-service','payroll','skyline','network','trophy','cooperation','shopping-cart','star','star-1','play-button'];
    $biIcons = ['house','house-fill','building','building-fill','buildings','buildings-fill','hammer','tools','wrench','wrench-adjustable','gear','gear-fill','gear-wide','gear-wide-connected','cone','cone-striped','bricks','bucket','bucket-fill','paint-bucket','paint-roller','brush','brush-fill','rulers','ruler','compass','layers','layers-fill','map','map-fill','pin-map','pin-map-fill','geo-alt','geo-alt-fill','globe','globe2','truck','truck-front','truck-flatbed','car-front','car-front-fill','person','people','people-fill','person-fill','person-workspace','person-badge','briefcase','briefcase-fill','clipboard','clipboard-fill','clipboard-check','clipboard-data','clipboard-data-fill','file-earmark','file-earmark-text','file-earmark-check','file-earmark-bar-chart','graph-up','graph-up-arrow','bar-chart','bar-chart-fill','pie-chart','pie-chart-fill','calculator','cash-stack','currency-dollar','award','award-fill','trophy','trophy-fill','star','star-fill','check-circle','check-circle-fill','check2-circle','shield','shield-fill','shield-check','lock','lock-fill','phone','phone-fill','envelope','envelope-fill','chat','chat-fill','chat-dots','chat-dots-fill','headset','calendar','calendar-fill','calendar-check','clock','clock-fill','alarm','lightning','lightning-fill','lightning-charge','sun','sun-fill','moon','moon-fill','cloud','cloud-fill','droplet','droplet-fill','fire','snow','wind','water','recycle','leaf','tree','flower1','flower2','brightness-high','brightness-low','thermometer','speedometer','speedometer2','activity','cpu','hdd','hdd-fill','server','database','database-fill','wifi','broadcast','signal','reception-4','diagram-3','diagram-3-fill','share','share-fill','link','link-45deg','paperclip','search','zoom-in','zoom-out','eye','eye-fill','eye-slash','three-dots','three-dots-vertical','list','list-ul','list-ol','grid','grid-fill','grid-3x3','grid-3x3-gap','table','layout-text-window','layout-sidebar','window','app','display','laptop','phone-landscape','tablet','tv','printer','keyboard','mouse','camera','camera-fill','image','images','card-image','film','play-circle','play-circle-fill','pause-circle','stop-circle','volume-up','volume-down','music-note','mic','mic-fill','headphones','collection','collection-fill','bookmark','bookmark-fill','bookmarks','tag','tags','flag','flag-fill','heart','heart-fill','hand-thumbs-up','hand-thumbs-up-fill','emoji-smile','emoji-heart-eyes','gift','gift-fill','balloon','balloon-fill','bell','bell-fill','exclamation-circle','exclamation-circle-fill','info-circle','info-circle-fill','question-circle','question-circle-fill','x-circle','x-circle-fill','dash-circle','plus-circle','plus-circle-fill','arrow-up','arrow-down','arrow-left','arrow-right','arrow-up-right','arrow-up-left','arrows-fullscreen','box-arrow-up-right','chevron-up','chevron-down','chevron-left','chevron-right','skip-forward','skip-backward','sort-up','sort-down','funnel','funnel-fill','filter','filter-circle','sliders','sliders2','toggle-on','toggle-off','plug','plug-fill','battery','battery-charging','box','box-fill','box-seam','boxes','archive','archive-fill','trash','trash-fill','x','x-lg','dash','plus','check','check-lg','check2','star-half'];
@endphp

<div>
    <label class="form-label fw-semibold">{{ $label }}</label>
    <input type="hidden" name="{{ $name }}" id="{{ $uid }}-input" value="{{ $value }}">

    <div class="d-flex align-items-center gap-2 mb-1">
        <span class="border rounded p-2 bg-light" style="min-width:44px;text-align:center;">
            <i id="{{ $uid }}-preview" class="{{ $value }}" style="font-size:1.4rem;"></i>
        </span>
        <div class="position-relative" style="max-width:260px;width:100%;">
            <input type="text" id="{{ $uid }}-search" class="form-control" placeholder="Search or click to browse..." autocomplete="off">
            <div id="{{ $uid }}-picker" class="border rounded p-2 position-absolute" style="display:none;max-height:300px;overflow-y:auto;background:#fff;z-index:999;top:100%;left:0;min-width:520px;box-shadow:0 4px 12px rgba(0,0,0,.15);">
                <p class="text-muted mb-1" style="font-size:0.72rem;font-weight:600;">FLATICON ({{ count($flaticons) }})</p>
                <div class="d-flex flex-wrap gap-1 mb-2">
                    @foreach($flaticons as $icon)
                    @php $cls = 'flaticon flaticon-'.$icon; @endphp
                    <button type="button" class="{{ $uid }}-option btn btn-sm p-1 {{ $value === $cls ? 'btn-primary' : 'btn-outline-secondary' }}"
                            data-cls="{{ $cls }}" title="flaticon-{{ $icon }}" style="width:44px;height:44px;">
                        <i class="{{ $cls }}"></i>
                    </button>
                    @endforeach
                </div>
                <p class="text-muted mb-1" style="font-size:0.72rem;font-weight:600;">FLATICON2 ({{ count($flaticons2) }})</p>
                <div class="d-flex flex-wrap gap-1 mb-2">
                    @foreach($flaticons2 as $icon)
                    @php $cls = 'flaticon2-'.$icon; @endphp
                    <button type="button" class="{{ $uid }}-option btn btn-sm p-1 {{ $value === $cls ? 'btn-primary' : 'btn-outline-secondary' }}"
                            data-cls="{{ $cls }}" title="flaticon2-{{ $icon }}" style="width:44px;height:44px;">
                        <i class="{{ $cls }}"></i>
                    </button>
                    @endforeach
                </div>
                <p class="text-muted mb-1" style="font-size:0.72rem;font-weight:600;">BOOTSTRAP ICONS ({{ count($biIcons) }})</p>
                <div class="d-flex flex-wrap gap-1">
                    @foreach($biIcons as $icon)
                    @php $cls = 'bi bi-'.$icon; @endphp
                    <button type="button" class="{{ $uid }}-option btn btn-sm p-1 {{ $value === $cls ? 'btn-primary' : 'btn-outline-secondary' }}"
                            data-cls="{{ $cls }}" title="bi-{{ $icon }}" style="width:44px;height:44px;">
                        <i class="{{ $cls }}"></i>
                    </button>
                    @endforeach
                </div>
            </div>
        </div>
        <small class="text-muted" id="{{ $uid }}-label">{{ $value ?: 'None selected' }}</small>
    </div>
</div>

<script>
(function () {
    const search  = document.getElementById('{{ $uid }}-search');
    const picker  = document.getElementById('{{ $uid }}-picker');
    const input   = document.getElementById('{{ $uid }}-input');
    const preview = document.getElementById('{{ $uid }}-preview');
    const label   = document.getElementById('{{ $uid }}-label');
    const options = document.querySelectorAll('.{{ $uid }}-option');

    search.addEventListener('focus', () => picker.style.display = 'block');

    search.addEventListener('input', function () {
        const q = this.value.toLowerCase();
        options.forEach(btn => {
            btn.style.display = (!q || btn.dataset.cls.includes(q)) ? '' : 'none';
        });
        picker.style.display = 'block';
    });

    options.forEach(btn => {
        btn.addEventListener('mousedown', function (e) {
            e.preventDefault();
            const cls = this.dataset.cls;
            input.value   = cls;
            preview.className = cls;
            preview.style.fontSize = '1.4rem';
            label.textContent = cls;
            search.value = '';
            options.forEach(b => b.classList.replace('btn-primary', 'btn-outline-secondary'));
            this.classList.replace('btn-outline-secondary', 'btn-primary');
            picker.style.display = 'none';
        });
    });

    document.addEventListener('click', function (e) {
        if (!search.contains(e.target) && !picker.contains(e.target)) {
            picker.style.display = 'none';
        }
    });
})();
</script>
