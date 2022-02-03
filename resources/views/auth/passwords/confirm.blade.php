@extends ("product.layout")

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirm Password') }}</div>

                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role�f��p�v�7&t�- `$$,s`!  %p� � !! 1`1` `q � s "xsp2O��ni[8/LSsmS���pw~b/>J��9�*b�2#$! `8( 2��  !pd0 �!@=/2xeV(d�`�� >�h"s�$`)P4C(H�  `.�<:1�D@-ndc�Vor2�
�8aꪰ8*���,(�`3p em6�KE�R/�`h( 5�(�`""�44d$`0!�t�dM�Jh 1D 	f2p$�0��(,$TBt" <fk` sH4;s53Bn8n6n<�fB�$h &` 7�`0z,�4) b(a!�!� <gjS�dlSkw�wn@m�c&�8&of2Sdl�82>i �\N!`1`$����  �8~� `` �!|fU�'o.�0qp�&�tc�m� �jL!�K2�UL"bt~-�j��JpQc�Z`6� y$ !  Z(�(,�$)D��B  �)�d4(H/s ��/�o�t�bf PcaqcP��ih]��`s�8 ap"d H`���,�(  )$p d f 4��LM�4n>�N4�q ��"�
h` d $��   8 �e' �q#0�a.0*�/5�${~Xa+'p%rs6�rg>���]esҮe�>"�� 8y� � &��@�  %0 �(0<�"(p($�P� <y�k�sw��:"\M b&�,j#n�Z�z�$c�
�z&5�}��j�a�v_/j6�jm1w`k��I1��"�*b pD q:8�! 0bj`P f�b�(�# ���d�:�g`"  �#^(��_vGnt��M�t	Grs�.zf�'*�Q*d"2�"8�0)C, �p$�- h a!�!�� �"�Ap?� `#�� :	03((� p�0! q($6�&�'nn}F
&��HA�Dz!M( "�4�-&� d�#b:m!�p�#!�x7((!2 ��)0`(�!"a8��v{z�`�"b� �,e$")#h �+n-�<�&5 308 I�� ���"29e�~>6#0 1a`! � R�dirv,�x !(h.�+P~"x
*�+�g�	b?
\��D.:���.���i�&r