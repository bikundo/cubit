@extends('emails.layouts.default')

{{-- Web site Title --}}
@section('title')
@parent
{{trans('groups.create')}}
@stop

{{-- Content --}}
@section('content')

<tr align="left" valign="top">
   <td style="font-family: 'Open Sans', Arial, sans-serif; color:#676767; font-weight:bold;font-size: 18px">Password Reset</td>
</tr>
<!--end title-->
<tr>
   <td height="10"></td>
</tr>
<!--content-->
<tr align="left" valign="top">
   <td style="font-family: 'Open Sans', Arial, sans-serif; color:#95a5a6; font-size:13px; line-height:24px;">
      <p>To reset your password, <a href="{{ URL::to('users') }}/{{ $userId }}/reset/{{ urlencode($resetCode) }}">click here.</a>  If you did not request a password reset, you can safely ignore this email - nothing will be changed.</p>
      <p>Or point your browser to this address: <br /> {{ URL::to('users') }}/{{ $userId }}/reset/{{ urlencode($resetCode) }}</p>
      <p>Thank you, <br />
      The Admin Team
      </p>
   </td>
</tr>
<!--end content--> </table>
@stop
