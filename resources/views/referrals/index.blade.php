


<x-dashboard>
<div class="dash_header">
    <div class="dash_header_left">
        <h4 style="font-weight: bold;">Referrals</h4>
    </div>

    <div class="dash_header_right">
        <a   class="new-add-btn" href="/dashboard/referrals/create">
            New Referral
        </a>
    </div>
</div>
<!--
<div class="title-card">
    <div>
        <p>Title</p>
    </div>

        <div class="actions-title">
            <p>Actions</p>
        </div>

</div>
-->
<div class="title-card">
    <div>
        <p></p>
    </div>

        <div class="actions-title">
            <p></p>
        </div>

</div>

<table class="referrals-table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Coupon Code</th>
        </tr>
    </thead>
    <tbody>
        @forelse($referrals as $referral)
            <tr>
                <td>
                    <a href="/dashboard/referrals/show/{{$referral->id}}">
                        <span style="color: blue;">
                            {{ \Illuminate\Support\Str::limit($referral->first_name . ' ' . $referral->last_name, 20, '...') }}
                        </span>
                    </a>
                </td>
                <td>
                    <a href="/dashboard/referrals/show/{{$referral->id}}">
                        <span style="color: blue;">
                            {{ \Illuminate\Support\Str::limit($referral->email, 20, '...') }}
                        </span>
                    </a>
                </td>
                <td>
                    <a href="/dashboard/referrals/show/{{$referral->id}}">
                        <span style="color: blue;">
                            {{ \Illuminate\Support\Str::limit($referral->coupon, 20, '...') }}
                        </span>
                    </a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3" style="text-align: center; padding: 12px;">
                    No referrals found.
                </td>
            </tr>
        @endforelse
    </tbody>
</table>


<!--
@foreach($referrals as $referral)

    <div class="ad-card">
        <div>

            <a href="/dashboard/referrals/show/{{$referral->id}}"> {{ substr( $referral->first_name, 0,  60) }}
            </a>


        </div>

        <div class="actions">

        </div>

</div>

</span>

@endforeach
-->
<div class="ads-links">

    {{ $referrals->links()}}
</div>
</x-dashboard>
