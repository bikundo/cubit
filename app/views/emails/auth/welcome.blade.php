@extends('emails.layouts.default')

{{-- Web site Title --}}
@section('title')
@parent
{{trans('groups.create')}}
@stop

{{-- Content --}}
@section('content')

<tr align="left" valign="top">
   <td style="font-family: 'Open Sans', Arial, sans-serif; color:#676767; font-weight:bold;font-size: 18px">Welcome</td>
</tr>
<!--end title-->
<tr>
   <td height="10"></td>
</tr>
<!--content-->
<tr align="left" valign="top">
   <td style="font-family: 'Open Sans', Arial, sans-serif; color:#95a5a6; font-size:13px; line-height:24px;">

		<p><b>{{trans('pages.user')}}:</b> {{{ $email }}}</p>
		<p>To activate your account, <a href="{{ URL::to('users') }}/{{ $userId }}/activate/{{ urlencode($activationCode) }}">click here.</a></p>
		<p>Or point your browser to this address: <br /> {{ URL::to('users') }}/{{ $userId }}/activate/{{ urlencode($activationCode) }}</p>
		<p>Thank you, <br />
			~The Admin Team</p>
   </td>
</tr>
<!--end content--> </table>
@stop
