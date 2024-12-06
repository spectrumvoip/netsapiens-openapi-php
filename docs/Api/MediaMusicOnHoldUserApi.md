# SpectrumVoip\\\\NetSapiens\MediaMusicOnHoldUserApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createMohUserBase64()**](MediaMusicOnHoldUserApi.md#createMohUserBase64) | **POST** /domains/{domain}/users/{user}/moh#2 | Create a new MOH for User from Upload (JSON + Base64 File) |
| [**createMohUserFileUpload()**](MediaMusicOnHoldUserApi.md#createMohUserFileUpload) | **POST** /domains/{domain}/users/{user}/moh#1 | Create a new MOH for User from Upload (Multipart/Mixed Post) |
| [**createMohUserTTS()**](MediaMusicOnHoldUserApi.md#createMohUserTTS) | **POST** /domains/{domain}/users/{user}/moh | Create a new MOH for Domain from TTS |
| [**deleteMohUser()**](MediaMusicOnHoldUserApi.md#deleteMohUser) | **DELETE** /domains/{domain}/users/{user}/moh/{index} | Delete MOH for User |
| [**readMohUser()**](MediaMusicOnHoldUserApi.md#readMohUser) | **GET** /domains/{domain}/users/{user}/moh | Read MOH for User |
| [**updateMohUserBase64()**](MediaMusicOnHoldUserApi.md#updateMohUserBase64) | **PUT** /domains/{domain}/users/{user}/moh/{index}/#2 | Update MOH for User from Upload (JSON + Base64 File) |
| [**updateMohUserFileUpload()**](MediaMusicOnHoldUserApi.md#updateMohUserFileUpload) | **PUT** /domains/{domain}/users/{user}/moh/{index}#1 | Update a MOH for User from Upload (Multipart/Mixed Post) |
| [**updateMohUserTTS()**](MediaMusicOnHoldUserApi.md#updateMohUserTTS) | **PUT** /domains/{domain}/users/{user}/moh/{index} | Update MOH for Domain from TTS |


## `createMohUserBase64()`

```php
createMohUserBase64($domain, $user, $create_moh_domain_base64_request): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Create a new MOH for User from Upload (JSON + Base64 File)

> Note: # and anything after is NOT needed, its just to allow multiple examples for the same path/method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MediaMusicOnHoldUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$create_moh_domain_base64_request = {"index":"4","script":"base64 encoded in JSON","convert":"yes","encoding":"audio/wav","base64_file":"UklGRpw7AABXQVZFZm10IBIAAAAHAAEAQB8AAEAfAAABAAgAAABmYWN0BAAAAGk7AABkYXRhaTsAAP/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////+/v7+////fn5+fv////7+/v7/////fn5+fv////7+/v7//35+fn5+///+/v3+/v//fn5+fv////7+/v7/////fn5+fv////7+/v7///9+fn5+fv///v7+/v///35+fn7////+/v7+////fn5+fv////7+/v7/////fn5+fv////7+/v7///9+fn5+///+/v7+/v//fn5+fn7///7+/v7/////fn5+fv/////+/v7/////fn5+fv///v7+/v7//35+fn7////+/v7+////fn5+fv/////+/v7/////fn5+fv////7+/v7///9+fn5+/////v7+/v///35+fn7////+/v7/////fn5+///////+/v7/////fn5+fv////7+/v7//35+fn7////+/v7+////fn5+fv/////+/v7/////fn5+fv////7+/v7///9+fn5+/////v7+/v///35+fn7////+/v7//////35+///////+/v7/////fn5+fv////7+/v7///9+fn7////+/v7+/////35+fv/////+/v7//////35+///////+/v7///9+fn5+/////v7+/v///35+fn7////+/v7//////35+///////+/v7/////fn5+//////7+/v7///9+fn5+/////v7+/////35+fv/////+/v7//////35+///////+/v7/////fn5+/////v7+/v///35+fn7////+/v7//////35+/////////v///////35+//////7+/v7///9+fn5+/////v7+/////35+fv///////v/////////////////+/v7/////fn5+//////7+/v////9+fn7//////v7//////35+/////////////////35+///////+/v7///9+fn5+/////v7+/////35+fv///////v///////////////////v//////fn5+//////7+/v////9+fn7//////v7////////////////////////////////////+/v//////fn5+/////v7+//////9+fv///////////////////////////////////35+//////7+/v////9+fn7//////v7///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////+Sk5y+JhYRFia+nJOTm7wnFxIWJcKck5ObuigXEhYkxp2Tk5u4KhgSFiPLnpSTm7UrGBIWI9CelJOasywZEhUi2Z+Vk5qxLRkTFSHln5WTmq8uGhMVIP+glZOarjAaExUfZqGWk5muMhsTFR9ao5aTma00GxQVH1Gkl5OZrDccFBUeTKWXlJmrORwUFR5IppeUmao7HRUVHkSnmJSZqT0dFRUeQKiYlJioQB4VFR0+qZmUmKdEHhYVHTyqmZSYp0kfFhUdOqyalZimTR8WFRw4rZqVmKVTIBcVHDaum5WYpFshFxUcNK+blZikZyIXFhwysJyWmKP/IxgWHDGynJaYouckGBYbL7Wclpii2yUZFhsut52WmKHUJhkWGy25nZeYoc4nGRYbLbuel5igyigaFhssvZ6XmJ/GKRoWGyu/n5eYn8IqGhcaKsOfmJifvysbFxoqx6CYmJ+9LBsXGinKoZiYnrwtHBcaKM6imZieui4cFxoo1aOZmJ64Lx0YGifdpJmYnrcxHRgaJumlmpietTMdGBom/6aamJ2zNR4YGiVpp5qYnbI3HhgaJF2om5idsDkfGRokVqmbmJ2vOx8ZGiNPqZuYna49HxkaI0yqnJmdrj8gGRoiSKucmZ2tQSEaGiJFrJyZnKxFIhoaIUKtnZmcrEkjGhohP66dmZyrTCQaGiE9r56ZnKpQJRsaIDywnpqcqlclGxogOrKempypXiYbGh85tJ+anKlqJxwaHze2n5qcqP8oHBofNrefmpyo6ikc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RzMsKSswP964rKenq7h7NykkJCk34bKnoaOqvE0uJSIlLULHrqelqK/GSzMrKSowP+i8r6uqrbfRRjEqKCkvRcmvp6SmrsZCLCUiJi9PvKuko6i04jkrJiYrOGa9rqqqrbfPSjYtKywxP+q7rqmprLjkOywmJSo2cLeppKSquVwyKCQlLD7OsammqK/DUDYsKiswP/O+saysrrjPSjUsKSswQtC0qqanrsFLLyckJy5Iwa2mpKiy1D0tKCcrN1q/sKuqrbfOTTguLC0yP/q+sKuqrbjZPy4pJyo1W7yspqWqt/83KiUmLDzbtaunqa+/WjguKywxPnq/s66tr7nNTjguKywxQdu4rKiprr5VNComJy5Dyq+opqmxzEMvKSgrNlLFsqyrrrfMUDowLS40P3TBs62srrjTRTIrKSs0UMGuqKeqtd48LCcnLDryuaypqa++ZzsvLCwxPmzDta+usLnNUzswLS0yQOm7rqqqrr1mOCwoKC4/07Sqp6mwx0oyKyksNU3Kta2srrfKVjwyLi81P2vFtq+tr7nPSzYtKiw0S8iyqqirtNJALykoLDhmva6qqq68/D4wLS0xPWPGt7CvsbrMWD0zLi40P/+/saysr7z2PC4qKi4947isqaqvwlI2LCosNEnPuK6trrfJWz00LzA2QGXIuLGvsbnNUDkvLC00SM+2rKqstMxIMispLDdXwbCrq6675EEzLi0yPV3JubKvs7vMXD81MDA1P2zDta6tsLvgQDErKy47eLyuqquvv145LissM0bXurCtr7fHYj81MTE3QGDLu7Ows7rMWDwxLi41Rtm6rquss8dONi0qLTZPyLStrK+62kY1Ly4yPFjMu7OxtLvLYUE3MjI2QGPIuK+usbvYRzUtLC86X8CxrKuvvXg9LywtM0LivbKur7fFbUI3MjI3QV7NvLWytLvLXj81Ly82ROa9sa2ttMRaOi4sLTVKzreurK+50ks4MC8yPFTPvLWytbzLaEQ5NDQ4QF7MurOws7vSTDgvLS86Vse1rayvvOZAMy0tM0D4v7SvsLfE/0U5NDM4QVzQvre0trzLZ0I3MjE3Q/3BtK6utMFqPTEtLjVG2Lqvra+4zVA6Mi8zO0/Vvra0trzLbkc7NjU5QVvPvbWytLzPUzsyLzA6T824r66wu9pHNi8uMz5rxLawsbfC7Ug6NTU5QVrUv7m2t73Lb0Y6NDM4QmzGuLCvtcD2QTQuLzVD5b2yrq+4ylk9NDAzO03bv7i1trzKeEk9ODc6QlnUv7i0trzNWz41MDI6TNW7sa+xutJMOTAvMz1dybmysbfB40s8NjU5QVjXwrq4ub3LfEk8NzU5QmHLurOxtr/jRzcwLzVB/8G1r7C3x2M/NjI0O0viw7m2t7zK/Es+OTg7Q1jZwrq2t73MZEI4MzQ6St6+tLCyus1TPDMwMz1Wzbu0s7e/3E4+ODY6QVbbxLy5ur7L+Ew+OTc6Ql3Pvba0t7/bTDozMTU/Z8a4srG3xHdDODM0O0ntxru3uL3J8U0/Ozo8RFfdxby4ub3Lb0Y6NTU6SO3Ct7KzuspdPjUyNDxQ1L22tLe/11M/OTc6QVTex726u7/L8E9AOzk7Q1rVv7i2uL/WUj01MzY/XMy7tLO3wu1IOjU1Okh+yby4ub3J609BPDs9RVfgyL66ur7L/0o9ODc7R3rHurW1ushrQjgzNTxN3L+4tbe+01lCOjg6QVLkyb67vL/M7FJDPDs8RFfbw7u4ub/RWkA4NTc+VtG9trS4wd9MPDc2OkZszL65ub3I5lNDPTw+RVblyr+8vL/L8U4/Ojk8RmnMvbe2usb7Rzo1NjtL58S6tri+z19FPDk7QVDqy7+8vcDM6VVFPjw+RVbgx726ur/PYUQ6Nzg+UdnAuLa4wNlRPjg3O0Viz7+7ur3I4FZFPj0+RlbqzMG9vcDL61FCPDo9RmDQv7m4u8XoTD03NztJ+8i8uLi+zWpIPTo7QU/yzcG9vcHM51hHPz0/RlXnyr+7vMDObUg9OTk+TuLEure5v9RYQTo4O0Nc1cK8u73H3VpHPz0/RlXuzsS/vsLM51ZFPjw+RlzXwru5u8TeUD85ODxHbcy+ubm+y3tLPjs8QE7/z8O+vsLM5VtJQT9AR1XtzcG9vcHNfkw/Ojo+TO/IvLm6v9BfRTw5O0NY28W9u77G2l5JQD4/R1X00MbAv8PM5FpIPz0/R1rcxr27vMTaV0I7OTxGYtC/u7q+yvBOQDw8QE1z0sW/v8PM4l1LQ0BBSFX1z8S/vsLN8U9CPDw/S3rMvrq7v85sST06PEJU4ci+vL7G2GNLQj9AR1T708jCwcXN4V1LQj9AR1jjyr+8vcTWXkY9Oz1FXNbDvLu+yeZSQz09QExr1cfAv8TM4F9NRUJDSVX908fBv8PN6lVFPj0/S2vQwby8v8z/TD88PEJQ68vAvb7G1WpNREBBSFR91cnEw8bN4GFNRUBBSFbrzcK+vsTUZ0o/PD1FWN3Hvry+yN9YRj4+QUtl2cnCwMTM32NOR0NESlV71snDwcXN5VpIQD5ASmPWxb69v8vtUEI9PUFO+87Cvr/F03NPRkFCSFN32MvFxMfO32VPR0NDSVb1z8W/v8XRck1BPT5EVObKv72+x9tdSUA+QUtf3cvDwcXM3WdQSEVGSlV22cvFw8bN4l5LQz9CSl7cyL++wMrlVkU+PkJNctHFv7/F0f5TR0JDSFJw2szHxcjO32lRSUVFSlX/1MjCwcbQ/FFFPz9FUvDNwr6/x9dlS0I/QUpc4s3Fw8XM3GtSSkZHS1Zy3M3HxcjO32NORkJDSlziy8K/wcreW0hAPkJMadbHwMDFz/FWSURESFJt3c7Ix8nP3mxUS0dHS1V32MrEw8fP71ZIQUBFT33Qxb+/xtVuTkRAQkla6c/HxMbM229VS0hITFZv3s/Jx8nO3mlQSERFS1rqzsXBwsrbYUtCP0JLYdvKwsHFzupaS0VESFFp38/JyMrP3m9XTElITFZw3M3HxcjP6VtKQ0JGT27WyMHBxtJ9UUdCQ0lY8NHIxcbM2ndXTElJTFZt4NHLycrP3m5USkZGS1nz0sjDxMrZak5FQUNLXeDMxcLGzuVeTUdFSVBm4tHLycvQ3nRZTkpKTVZt38/Jx8nP5V9NRkRGTmjbysTCx9DzVklERElV/dXKxsfM2f9ZTkpKTVZs49PMysvQ3nNXTEhITFj/1srFxcrXdVJIQ0RLW+nPx8TGzd9jT0hGSU9j59PMysvQ3nhbT0xLTldr4tLLycrQ4mVPSEVHTmLfzcbEx8/qW0tFRUlUdtnMx8fM1/hcT0tKTVdr5tXOzMzR3nlaTkpKTVd32s3Hx8rV/FdKRUVLWPLSycXHzd1qUUpHSU9g69XNy8zR3X1dUU1MTldq5tXNysvQ32tUS0dITl/nz8jFyM/lX01HRklSbdzNycjM1vBeUExLTldp6dfPzc3S3n5dUExLTldv3s/JyMvV8FtMR0dLV//Xy8fHzdtxVUtISk9e8NjOy8zR3f5eU05NT1hp6tfOzMzR33FXTUlKTl3u1MrHyM7gZlBJR0pRaODPysnM1exhUk1MTldo69nQzs7T3v1fU01MTlhs4tLLyszU619PSUhLVXPbzcjIzNl8WE1JSk9d+NrPzM3R3fpgVU9OUFlp7drQzc7S3nlbT0tLT1z42MzJyc7dbVRLSEpQY+bSy8rM1OlmVU5MTlZm7tvSz8/U3vphVk9OT1hq59XNy83U52RSS0lMVGzez8rJzdj4XE5LS09b/9zRzc3R3PZjV1BPUllo79zTz8/U3v9dUU1MT1t9287Kys7cdlhNSktQX+zVzcvM1OVqV09NT1Zl8dzUz9DV3vdkWFFPUVlp69jPzc7U5GpWTUtMVGjk0svKzdbvX1BMS09ad9/Tzs7S3PJlWFJQU1po8t3V0NDV3vpgVE5NUFp13tHMy8/b/ltPS0tPXvTZzszN0+JvWVBOT1Zj9t7V0dHW3vVnWlNQU1lo79vSzs/V4m9ZT0xNU2Tq1c3LzdbqZFRNTE9Zb+LVz87S2+9oWlNRVFpn9d/X0tLW3vZkV1BPUVpv49TOzc/a9F5RTExPXP7c0M3N0992XFJPT1Zi+9/X0tLX3/NpW1VSVFpn9N3Uz9DV4XhcUU1OU2Hw2c/MztXmaVdOTU9YbOfX0M/S2+1rW1VSVVtn+OHZ1NTX3vNoWlNQU1ps6NjPztDZ7mNUTk1QW3jf087O095+XlRPUFZg/+LY1NPX3/JrXVdUVltn+N/X0tHW4P9fVE9PVF/53NHOztXjb1lQTk9YaevZ0s/T2+ttXVZTVVtn++Pa1tXY3/FrXFVSVFtq7NrSz9HZ62lXT05QWnDj1c/O0936YVZRUVZfe+Ta1dTY3/BtXlhWV1xn/OPZ1NPX3/pjV1FQVF5939TPz9Xgd1xST1BXZu/c1NHT2ulxXldVVltm/uXb19bZ3+9tXldUVVtp8d3V0dLZ6G1aUk9RWWzo2NDP09zzZVhSUlZfdufb1tXY3+9vX1pXWFxn/+bb1tXY3/ZnWlNSVV5249fQ0NXf/19VUFFXY/be1dLU2ud2X1lWV1tm/+fd2dja4O9vX1lWV1xo99/X09PZ5nRdVFBSWWnt29PQ09vuaVpUU1Zecurc19bZ3+5xYVtYWV1nfujd2NfZ3/JqXFZTVl1x6NnT0dXe+GNXUlJXYf7g19PU2uV7YlpXV1xlfOne2tnb4e5yYltYWFxn/OPZ1dXZ5HtfV1JTWWby3dXS1NvrbVxVVFdebu3e2NfZ3+10Y1xZWl5nfOre2tja4O9uXlhVV11u7NzV09bd8mdaVFNXX3vk2dXV2uT/ZVtYWFxleuvf29rc4e51ZFxZWl1n/+bc19ba4/5kWVRUWWT639fT1dvpcl5XVVddbO/f2tja3+x3ZV1aW15ne+zg29rb4e9xYFpXWF1s8N7X1dfd7mxcVlRXX3Xo29bW2uL6aF1ZWFxkd+zg3Nvc4u53Zl5bW15nfOnd2djb4/loW1ZWWWN+5NnV1drneGFZVldda/Xi29na3+t6Z15bXF9oee3i3dvc4e51ZFxZWV5r9uHZ1tfd7G9eWFVYXm/s3djW2uH2a15aWVxkde7i3dzd4u55aF9cXF5neuzf29nc4/VrXlhXWmJ56NvX1trl/2RbV1hdafrk3Nna3+p9aF9cXF9oeO/k3tzd4u54Zl1aW15q++Xb2Njd6nZhWldYXm3v39nX2uDybV9bWlxjc/Dk3tze4+57amFdXV9oeO7i3Nvc4/JuX1pYW2F0693Y19vj+2hcWFhcZ/7n3drb3+r/amBdXV9od/Dm393e4+17aV9cXF9p/+jd2trd6HxlW1hZXmv14tvY2t/vcGJcWlxjcPPl3t3e4+19a2JeXmBod/Dk3tzd4+9yY1xaW2Fw7t/a2dvi9mteWllcZnzq3tvb3+n9bGJeXWBodvPn4N7f5O19a2FdXV9pfOvf29vd5/5oXVpaXmn65dza29/tdWRdW11ib/bn397e5O1+bGRfX2FpdvPn393e5O92Zl5bXGFu8+Pc2tvi8m5gW1pdZXjs4Nzc3+j6bmNeXmBodfXp4t/g5e3/bWNfXmBpeu3i3dze5/prX1tbXmj/6N7b29/remdeXF1ibvrp4d7f5O3/bmVhX2JpdfXp4d7f5O56aV9dXWFt+Obd29zh73JjXFtdZHTv4t3c3+f3b2VfXmFodPfq4+Dh5u3/bmZgX2Fpd/Dl3t3f5vZuYlxcXmd769/c3N/qfmlfXV1ibf3r4t/f5O3+b2diYWRqdPfq4+Dg5e59a2JeXmJs/enf3N3h7XhmXlxdY3Hz5d7d3+f1cmdgX2Foc/jr5eLi5+79b2diYGNpdvPn4N7f5vRxZV5dXmZ37uLd3N/p/WxhXl5ibP/s5N/g5Oz8cGhjYmRqdPns5eLi5u7/bWRfX2Jr/+zh3d3h7HxpX11eY2/359/e3+bydmhiX2Jocvrs5uPj5+78cWlkYmRqdfbp4t/g5vF2Z19eX2Z08eXe3d/o+W5kX15ia3zu5eHg5ez7cmlkY2VqdPvt5+Pj5+7+b2ZhYGNrfO7k397i6/9rYV5eY2376uHe3+bweWpjYGJocfzt5+Tk6O78c2plZGVqdPnr5OHi5/B6amJfX2Zx9uff3t/n9nFmX19ianrw5+Lh5ez5dGpmZGZrdPzu6OXl6O78cWljYWRrefHn4N/i6vtuZF9fY2z/7OPf4OXvfGxlYmNocP7u6OXl6O77dWxnZWZrc/vt5uPj5+99bGRgYGZv+uri3+Dn83VoYV9iaXfz6ePi5ev4dmtnZWdrc/3v6ubm6e77dGplY2Vrd/Tp4uDj6vhxZmBfY2t97uXg4OXu/21mY2Nob//v6ebm6e76dm1oZmdrc/3v6OXk6O//bmZiYmZu/ezk4OHn8HlqY2BiaXX26uXj5ev2eG1oZmdrc/7x6+fn6e76dmxnZWZrdvfr5eLk6vZ1aWJhY2t68Ofi4eXt/W9oZGRob37x6ufm6e76eG5pZ2hsc/7w6ubm6e/+cGhkY2du/+7m4uLn73xsZWJjaXP57Obk5uv1em5pZ2hrc//y7Ono6u76eG1pZmdrdfrt5+Tl6vR4a2RiZGp39Onk4uXs+3JpZWRobnz06+jn6e75eW5qaGlsc//y6+jn6e78c2pmZGdtfPHo5OPn7v9uZ2NkaHH87efl5uvzfG9qZ2hsc//07erp6+/5eW9qaGhsdPzu6eXm6vN7bWZjZWp1+Ovl4+bs+XVrZmVobnr27Ono6u75em9raWptc//07eno6u/7dmxnZmhtevTq5eTn7v1waWRkaG//7+nm5uryfnBraGlscn717erq6+/5e3BraWlsdP7w6ufn6vF+b2hlZmpz++3n5Obr9nhsZ2ZobXn47eno6u74e3BsamttdH727urp6+/6eG5pZ2ltePfs5+Xo7fp0amZlaG9+8ern5+rx/3JsaWlscn327uvq7O/5fHFsamptc//z7Ojo6/H/cWpmZmpx/e/p5ufr9XpuaWdobXf67urp6u73fHJta2tudH737+zq7O/5em9raGltd/ru6efo7fh3bGdmaW589Ovo5+rw/nRtampscX337+zr7PD4fXNta2ttc3717erp6/D9dGxoZ2pw//Hq5+fr831vamhpbXb77+vq6+73fXNubGxudH348O3r7O/4fHFsamptdvzv6ujp7fd6bmlnaW569+3p6Orv/HZtampscXz58O3s7fD4fXRubGxudH337uvq7PD8dm1paGtwffTs6Ojr8v9xa2hpbXX98ezq6+72fnRubGxudH358e3s7fD4fXNta2tudf7y7Onp7fV8b2poaW14+e7q6evv+nhua2pscXv68e3s7fD4fnVvbW1udH348Ozr7PD6eW9raWtve/bt6enr8f50bGlpbHT/8+3r6+71/3ZvbW1vdHz68u7t7vH4fnVubGxudf/07erq7fR+cmxpam12/O/r6evv+XpvbGtscHr78u7t7vH4/3Zwbm1vdHz68e3s7fD6e3Bsamxvevnv6+rr8Px2bmpqbHN+9e7r7O71/ndvbW1vdHz78+/u7vH4/3ZvbW1udX727uzr7fT/dG1qam11/vLs6uvu+HxxbWttcHn89O7t7vH4/3dxbm5vdXz78+7t7vH5fHNta2xvefvw7Ors7/p5b2trbXJ99+/s7O70/Xhxbm5vdHz79fDu7/L4/3dxbm5vdX348O3s7vP9dm5ra210//Tt6+vu931zbmxtcHj99e/u7vH4/3hyb29wdXz89e/u7vH5fnVubG1veP3z7evs7/l7cGxrbXF7+fDt7O7z/Hlybm5vdHv89fHv7/L4/3lyb25vdX368u7t7vP8eW9sbG5zfvbu7Ozu9v91bm1tcHf+9vDu7vH3/3lzcG9xdXv99vHv7/L4/3ZvbW1vd/717uzt7/h9c21sbXF6+/Lu7e7z+3tzb25vdHv99vLv8PP4/3p0cG9wdXz78+/u7vP7enJubW5zfPjw7ezu9f53b21tb3f/9/Hv7/H3/np0cXBxdnv99/Lv7/P4/3hxbm5wdv/37+3t7/d+dW5tbXB5/PTu7e7z+3x0b29wdHr+9/Pw8fP4/np1cXBxdXz89fDu7/P6fHRvbW5ze/ry7u3u9P15cW5ub3Z++fLv7/L3/nt1cnFydnv++PPx8fP4/3lzb29xdn748e7u7/b/d29tbnB4/vXv7u7y+n12cW9wdHr++PPx8fT4/nt2cnFydnv99/Hv7/P6fXVvbm9yevz07+7v9Px6c29ucHZ9+vPw7/L3/Xt2cnFzdnv++fTy8vT4/np0cW9xdn368+/u8Pb+eHFubnB3//fw7u/y+X53cm9wdHr/+fTy8vT5/nx3c3Jzdnv++PPw8PT5fndxb29yef317+7v8/t8dG9vcHV8+/Xx8PL3/Xx3c3Jzdnv/+fXz8/T4/nt2cnFydnz79fDv8Pb9enNvb3B3fvjy7+/y+P94c3BxdHn/+vXz8vX5/nx4dHN0dnv/+fTy8fT5/3lzcG9zef/38e/v8/p9dnBvcHV8/Pby8PL2/H13dHJzd3v/+vb08/X5/nx3c3Jzdnz99vLw8fX8e3Vwb3F2ffrz8O/y+P95dHFxdHn/+vbz8/X5/X14dXR0d3v/+vbz8vX5/3p0cXBzeP/58/Dw8/l+d3JvcHV7/ffz8fL2/H14dXN0d3v/+/f19Pb5/X14dHN0d3z9+PPx8vX7fXZxcHF2fPv18fDy9/56dXJxdHl++/f08/X5/X15dnR1d3v/+/f08/X5/nt2cnFzeH769PHw8/n/eXNwcXR6/vj08vP2+355dXR0d3v/+/f19fb5/X15dnR0d3v++fTy8vX7fnhzcXJ2fP328vHy9/18dnNydHh+/Pf09PX5/X15dnV2eHv/+/f19Pb5/nx3dHJ0eH379vLx8/j+enVycXR5//n18vP2+/96dnR1d3v//Pj29ff5/X56dnV1d3v/+vbz8/b6/3l0cnJ2e/748/Lz9/x9d3RzdHh9/fj19Pb5/X56d3Z2eHv//Pj29fb5/X14dXN0eH389/Py9Pj+e3ZzcnR5//r28/P2+v97d3V1d3r//Pn29vf5/X56d3Z2eHv/+/f09Pb6/3p2c3N2ev/59fLz9vt+eHVzdHh9/fn29fb5/H56eHZ2eHv//Pn39vf5/X15dnR1eHz9+PXz9Pj9fHd0c3V5fvv39PT2+v97d3V1d3p+/fn39vf6/X57eHZ2eHv//Pj19fb6/3t3dHR2ev/69vP09vv/eXV0dXh8/vr29fb5/P97eHd3eHv//fr39/f6/X56d3V2eHz++fb09fj8fXh1c3V4ffz49fT2+f58eHZ2d3p+/fr49/j6/f97eXd3eHv//Pn29vf6/nx4dXR2ev/79/T09vr/enZ0dXd8//r39vb4/P97eXd3eXt+/fr49/j6/f97eHZ2eHz/+vf19fj8fnl2dHV4ff359vX2+f59eXZ2d3p+/fr49/j6/f98eXh4eXt+/fr39vf6/n15dnV2eX78+PX19vr/e3d1dXd7//v49vb4/P98eXh4eXt+/fv5+Pj6/f98eXd3eXz/+/j29vj7/3p3dXV4fP769vX2+f19end2d3p9/vv4+Pj6/f98enh4eXt+/fr49/j6/X56d3Z3eX39+fb19/r+fHh2dnd7//z49/f4+/98enh4eXt+/vv5+Pn6/f98eXh4eXv//Pn39vj7/3t4dnZ4fP/69/b2+f1+enh3d3p9/vv5+Pj6/f99enl5ent+/vv5+Pj6/X57eHd3eX3++vf29/r+fXl3dnd6fvz59/f4+/99enh4eXt+/vv6+fn6/f99enh4eXv//fr49/j7/3x5d3Z4e//7+Pb3+fz/e3h3eHp9//z5+Pn6/f99e3l5enx+/vv5+Pn6/f97eXd4eX3/+/j39/n9fnp3d3h6fv36+Pf5+/59e3l4eXt+/vz6+fn7/f99e3l5enx+/fr4+Pj7/n16d3d4e//8+ff3+fz/fHl4eHp9//z6+fn6/f99e3p5enx+/vz6+fn7/f98enh4enz//Pn39/n9fnt4d3h6ff76+Pj5+/5+e3l5eXt+//z6+vr7/f99e3p5enx+/vv5+Pn7/n56eHd4e379+vj3+fz/fHl4eHp8//z6+fn6/P99e3p6enx+//z7+vr7/f99enl5enz//Pn4+Pn8/3x5eHh6ff77+fj5+/5+e3p5ent+//z7+vr7/f9+fHp6enx+/vz6+fn7/n57eXh5e37++vj4+fv/fXp4eHp8//37+fn6/P9+fHp6e3x+//37+vr7/f99e3l5enz//fr5+Pr8/3x6eHh6ff/8+fj5+/3/fHp5ent+//37+vr7/f9+fHt6e3x+//z6+fr7/f98enl5e37++/n4+fv+fnt5eXp8//37+vn6/P9+fHt6e3x+//37+vr7/f9+e3p6enz//fv5+fr8/316eXl6fP/8+vn5+/3/fHp6ent9//37+vr7/f9+fHt6e3x+//37+vr7/f98enl5e33//Pr5+fv+fnt5eXp8fv77+vr6/P5+fHt6e3x+//38+/v7/f9+fHt6e3x+/vz6+fr8/317eXl6fP/9+/n5+/3/fXt6ent9//38+/v7/f9+fXt7e3x+//37+vr7/f99e3p6e33//Pr5+fv9/3x6eXp8fv78+vr7/P5+fXt7e3x+//38+/v8/f9+fHt6e3x+/vz6+vr8/n58enl6fP/9+/r5+/3/fXt6ent9//78+/v8/f9+fXx7e3x+//38+/v7/f99e3p6e33//fv6+vv9/3x6enp7fv/8+/r7/P7/fXt7e3x+//78+/v8/f9+fXt7e3x+//37+vr8/n58enp6fH7+/Pr6+/z/fnx6ent9//78+/v8/f//fXx7fHx+//78+/v8/f9+fHt6e33//fv6+vv9/317enp7ff/9+/r7/P7/fXx7e3x+//79/Pz8/f//fXx7e3x+//37+/v8/v99e3p6fH7+/Pv6+/z/fnx7e3t9//78+/v8/f//fXx8fH1+//79/Pv8/f9+fHt7e33//vz7+vv9/317enp7ff/9+/v7/P7/fXx7e3x+//79/Pz8/f//fXx8fHx+//38+/v8/v99e3p7fH7//fv6+/z+fnx7e3t9//79/Pv8/f7/fXx8fH1+//79/Pz8/f//fXx7e33//vz7+/v9/358e3t7ff/+/Pv7/P7/fnx8fHx+//79/Pz8/f//fnx8fH1+//78+/v8/f9+fHt7fH7//fv7+/z+/317e3t9fv/9/Pz8/f7/fn18fH1+//79/Pz8/f//fXx7fH1+//37+/v9/358e3t7ff/+/Pv7/P3/fn18fHx+//79/Pz9/f//fn18fH1+//79/Pz8/f9+fHt7fH3//vz7+/z+/318e3t9fv/9/Pz8/f7/fn18fH1+//79/fz8/f//fnx8fH1+//38+/z9/v99fHt8ff/+/fz7/P3/fn18fHx+///9/fz9/f//fn18fH1+//79/Pz8/f9+fXx7fH3//vz7+/z+/358e3x9fv/+/Pz8/f7/fn18fH1+///+/fz9/f//fn18fH1+//78/Pz9/v99fHt8fX7//fz7/P3/fn18fHx9///+/fz9/f//fn19fX1+///9/Pz8/f//fXx8fH3//v38+/z+/358fHx9fv/+/fz8/f7/fn19fX1+///+/f39/f7/fn18fH1+//79/Pz9/v9+fHx8fX7//fz8/P3//318fHx9///+/f39/f7/fn19fX1+///+/fz9/f//fXx8fH3///38/Pz9/359fHx9fv/+/fz8/f7/fn19fX1+///+/f39/v7/fn19fX1+//79/Pz9/v9+fXx8fX7//vz8/P3+/359fH19////////////////////////////////////AA=="}; // \SpectrumVoip\\\\NetSapiens\Model\CreateMohDomainBase64Request

try {
    $result = $apiInstance->createMohUserBase64($domain, $user, $create_moh_domain_base64_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaMusicOnHoldUserApi->createMohUserBase64: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **create_moh_domain_base64_request** | [**\SpectrumVoip\\\\NetSapiens\Model\CreateMohDomainBase64Request**](../Model/CreateMohDomainBase64Request.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMohUserFileUpload()`

```php
createMohUserFileUpload($domain, $user, $synchronous, $script, $file, $index, $convert): object
```

Create a new MOH for User from Upload (Multipart/Mixed Post)

> Note: # and anything after is NOT needed, its just to allow multiple examples for the same path/method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MediaMusicOnHoldUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = ; // string | 
$user = '~'; // string | 
$synchronous = 'synchronous_example'; // string | When synchronous is requested with \\\"yes\\\" the response will be a 200 on success and will contain a valid JSON representiation of the new resource. If no or left off request a 202 \\\"Accepted\\\" will be given in a success case and this can be considered a success. Synchronous responses will be a little slower as the API will process the geo replication request and wait till the local copy has been written and can be read back berfore sending a response.
$script = 'script_example'; // string | This is a simple explanation of what the audio is and can include what is said in the audio file for explanation.
$file = '/path/to/file.txt'; // \SplFileObject | This is a \\\"File\\\" type parameter that needs to include the audio file in question using a file post method.
$index = 56; // int | The index of the file, Example \\\"2\\\" for greeting 2. \\\"0\\\" will be for intro message that will only be played once.
$convert = 'convert_example'; // string | Setting yes will allow the API to attempt to convert the file from accepted formats into the correct format for media playback

try {
    $result = $apiInstance->createMohUserFileUpload($domain, $user, $synchronous, $script, $file, $index, $convert);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaMusicOnHoldUserApi->createMohUserFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **synchronous** | **string**| When synchronous is requested with \\\&quot;yes\\\&quot; the response will be a 200 on success and will contain a valid JSON representiation of the new resource. If no or left off request a 202 \\\&quot;Accepted\\\&quot; will be given in a success case and this can be considered a success. Synchronous responses will be a little slower as the API will process the geo replication request and wait till the local copy has been written and can be read back berfore sending a response. | |
| **script** | **string**| This is a simple explanation of what the audio is and can include what is said in the audio file for explanation. | [optional] |
| **file** | **\SplFileObject****\SplFileObject**| This is a \\\&quot;File\\\&quot; type parameter that needs to include the audio file in question using a file post method. | [optional] |
| **index** | **int**| The index of the file, Example \\\&quot;2\\\&quot; for greeting 2. \\\&quot;0\\\&quot; will be for intro message that will only be played once. | [optional] |
| **convert** | **string**| Setting yes will allow the API to attempt to convert the file from accepted formats into the correct format for media playback | [optional] |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMohUserTTS()`

```php
createMohUserTTS($domain, $user, $create_moh_domain_tts_request): \SpectrumVoip\\\\NetSapiens\Model\Audiofile
```

Create a new MOH for Domain from TTS



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MediaMusicOnHoldUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = '~'; // string | 
$create_moh_domain_tts_request = new \SpectrumVoip\\\\NetSapiens\Model\CreateMohDomainTTSRequest(); // \SpectrumVoip\\\\NetSapiens\Model\CreateMohDomainTTSRequest

try {
    $result = $apiInstance->createMohUserTTS($domain, $user, $create_moh_domain_tts_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaMusicOnHoldUserApi->createMohUserTTS: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **create_moh_domain_tts_request** | [**\SpectrumVoip\\\\NetSapiens\Model\CreateMohDomainTTSRequest**](../Model/CreateMohDomainTTSRequest.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Audiofile**](../Model/Audiofile.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMohUser()`

```php
deleteMohUser($domain, $user, $index): object
```

Delete MOH for User



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MediaMusicOnHoldUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$index = 2; // string | 

try {
    $result = $apiInstance->deleteMohUser($domain, $user, $index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaMusicOnHoldUserApi->deleteMohUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **index** | **string**|  | |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readMohUser()`

```php
readMohUser($domain, $user): \SpectrumVoip\\\\NetSapiens\Model\Audiofile[]
```

Read MOH for User



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MediaMusicOnHoldUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 

try {
    $result = $apiInstance->readMohUser($domain, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaMusicOnHoldUserApi->readMohUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Audiofile[]**](../Model/Audiofile.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMohUserBase64()`

```php
updateMohUserBase64($domain, $user, $index, $update_moh_domain_base64_request): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Update MOH for User from Upload (JSON + Base64 File)

> Note: # and anything after is NOT needed, its just to allow multiple examples for the same path/method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MediaMusicOnHoldUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$index = 'index_example'; // string | 
$update_moh_domain_base64_request = {"index":"4","script":"base64 encoded in JSON","convert":"yes","encoding":"audio/wav","base64_file":"UklGRpw7AABXQVZFZm10IBIAAAAHAAEAQB8AAEAfAAABAAgAAABmYWN0BAAAAGk7AABkYXRhaTsAAP/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////+/v7+////fn5+fv////7+/v7/////fn5+fv////7+/v7//35+fn5+///+/v3+/v//fn5+fv////7+/v7/////fn5+fv////7+/v7///9+fn5+fv///v7+/v///35+fn7////+/v7+////fn5+fv////7+/v7/////fn5+fv////7+/v7///9+fn5+///+/v7+/v//fn5+fn7///7+/v7/////fn5+fv/////+/v7/////fn5+fv///v7+/v7//35+fn7////+/v7+////fn5+fv/////+/v7/////fn5+fv////7+/v7///9+fn5+/////v7+/v///35+fn7////+/v7/////fn5+///////+/v7/////fn5+fv////7+/v7//35+fn7////+/v7+////fn5+fv/////+/v7/////fn5+fv////7+/v7///9+fn5+/////v7+/v///35+fn7////+/v7//////35+///////+/v7/////fn5+fv////7+/v7///9+fn7////+/v7+/////35+fv/////+/v7//////35+///////+/v7///9+fn5+/////v7+/v///35+fn7////+/v7//////35+///////+/v7/////fn5+//////7+/v7///9+fn5+/////v7+/////35+fv/////+/v7//////35+///////+/v7/////fn5+/////v7+/v///35+fn7////+/v7//////35+/////////v///////35+//////7+/v7///9+fn5+/////v7+/////35+fv///////v/////////////////+/v7/////fn5+//////7+/v////9+fn7//////v7//////35+/////////////////35+///////+/v7///9+fn5+/////v7+/////35+fv///////v///////////////////v//////fn5+//////7+/v////9+fn7//////v7////////////////////////////////////+/v//////fn5+/////v7+//////9+fv///////////////////////////////////35+//////7+/v////9+fn7//////v7///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////+Sk5y+JhYRFia+nJOTm7wnFxIWJcKck5ObuigXEhYkxp2Tk5u4KhgSFiPLnpSTm7UrGBIWI9CelJOasywZEhUi2Z+Vk5qxLRkTFSHln5WTmq8uGhMVIP+glZOarjAaExUfZqGWk5muMhsTFR9ao5aTma00GxQVH1Gkl5OZrDccFBUeTKWXlJmrORwUFR5IppeUmao7HRUVHkSnmJSZqT0dFRUeQKiYlJioQB4VFR0+qZmUmKdEHhYVHTyqmZSYp0kfFhUdOqyalZimTR8WFRw4rZqVmKVTIBcVHDaum5WYpFshFxUcNK+blZikZyIXFhwysJyWmKP/IxgWHDGynJaYouckGBYbL7Wclpii2yUZFhsut52WmKHUJhkWGy25nZeYoc4nGRYbLbuel5igyigaFhssvZ6XmJ/GKRoWGyu/n5eYn8IqGhcaKsOfmJifvysbFxoqx6CYmJ+9LBsXGinKoZiYnrwtHBcaKM6imZieui4cFxoo1aOZmJ64Lx0YGifdpJmYnrcxHRgaJumlmpietTMdGBom/6aamJ2zNR4YGiVpp5qYnbI3HhgaJF2om5idsDkfGRokVqmbmJ2vOx8ZGiNPqZuYna49HxkaI0yqnJmdrj8gGRoiSKucmZ2tQSEaGiJFrJyZnKxFIhoaIUKtnZmcrEkjGhohP66dmZyrTCQaGiE9r56ZnKpQJRsaIDywnpqcqlclGxogOrKempypXiYbGh85tJ+anKlqJxwaHze2n5qcqP8oHBofNrefmpyo6ikc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RzMsKSswP964rKenq7h7NykkJCk34bKnoaOqvE0uJSIlLULHrqelqK/GSzMrKSowP+i8r6uqrbfRRjEqKCkvRcmvp6SmrsZCLCUiJi9PvKuko6i04jkrJiYrOGa9rqqqrbfPSjYtKywxP+q7rqmprLjkOywmJSo2cLeppKSquVwyKCQlLD7OsammqK/DUDYsKiswP/O+saysrrjPSjUsKSswQtC0qqanrsFLLyckJy5Iwa2mpKiy1D0tKCcrN1q/sKuqrbfOTTguLC0yP/q+sKuqrbjZPy4pJyo1W7yspqWqt/83KiUmLDzbtaunqa+/WjguKywxPnq/s66tr7nNTjguKywxQdu4rKiprr5VNComJy5Dyq+opqmxzEMvKSgrNlLFsqyrrrfMUDowLS40P3TBs62srrjTRTIrKSs0UMGuqKeqtd48LCcnLDryuaypqa++ZzsvLCwxPmzDta+usLnNUzswLS0yQOm7rqqqrr1mOCwoKC4/07Sqp6mwx0oyKyksNU3Kta2srrfKVjwyLi81P2vFtq+tr7nPSzYtKiw0S8iyqqirtNJALykoLDhmva6qqq68/D4wLS0xPWPGt7CvsbrMWD0zLi40P/+/saysr7z2PC4qKi4947isqaqvwlI2LCosNEnPuK6trrfJWz00LzA2QGXIuLGvsbnNUDkvLC00SM+2rKqstMxIMispLDdXwbCrq6675EEzLi0yPV3JubKvs7vMXD81MDA1P2zDta6tsLvgQDErKy47eLyuqquvv145LissM0bXurCtr7fHYj81MTE3QGDLu7Ows7rMWDwxLi41Rtm6rquss8dONi0qLTZPyLStrK+62kY1Ly4yPFjMu7OxtLvLYUE3MjI2QGPIuK+usbvYRzUtLC86X8CxrKuvvXg9LywtM0LivbKur7fFbUI3MjI3QV7NvLWytLvLXj81Ly82ROa9sa2ttMRaOi4sLTVKzreurK+50ks4MC8yPFTPvLWytbzLaEQ5NDQ4QF7MurOws7vSTDgvLS86Vse1rayvvOZAMy0tM0D4v7SvsLfE/0U5NDM4QVzQvre0trzLZ0I3MjE3Q/3BtK6utMFqPTEtLjVG2Lqvra+4zVA6Mi8zO0/Vvra0trzLbkc7NjU5QVvPvbWytLzPUzsyLzA6T824r66wu9pHNi8uMz5rxLawsbfC7Ug6NTU5QVrUv7m2t73Lb0Y6NDM4QmzGuLCvtcD2QTQuLzVD5b2yrq+4ylk9NDAzO03bv7i1trzKeEk9ODc6QlnUv7i0trzNWz41MDI6TNW7sa+xutJMOTAvMz1dybmysbfB40s8NjU5QVjXwrq4ub3LfEk8NzU5QmHLurOxtr/jRzcwLzVB/8G1r7C3x2M/NjI0O0viw7m2t7zK/Es+OTg7Q1jZwrq2t73MZEI4MzQ6St6+tLCyus1TPDMwMz1Wzbu0s7e/3E4+ODY6QVbbxLy5ur7L+Ew+OTc6Ql3Pvba0t7/bTDozMTU/Z8a4srG3xHdDODM0O0ntxru3uL3J8U0/Ozo8RFfdxby4ub3Lb0Y6NTU6SO3Ct7KzuspdPjUyNDxQ1L22tLe/11M/OTc6QVTex726u7/L8E9AOzk7Q1rVv7i2uL/WUj01MzY/XMy7tLO3wu1IOjU1Okh+yby4ub3J609BPDs9RVfgyL66ur7L/0o9ODc7R3rHurW1ushrQjgzNTxN3L+4tbe+01lCOjg6QVLkyb67vL/M7FJDPDs8RFfbw7u4ub/RWkA4NTc+VtG9trS4wd9MPDc2OkZszL65ub3I5lNDPTw+RVblyr+8vL/L8U4/Ojk8RmnMvbe2usb7Rzo1NjtL58S6tri+z19FPDk7QVDqy7+8vcDM6VVFPjw+RVbgx726ur/PYUQ6Nzg+UdnAuLa4wNlRPjg3O0Viz7+7ur3I4FZFPj0+RlbqzMG9vcDL61FCPDo9RmDQv7m4u8XoTD03NztJ+8i8uLi+zWpIPTo7QU/yzcG9vcHM51hHPz0/RlXnyr+7vMDObUg9OTk+TuLEure5v9RYQTo4O0Nc1cK8u73H3VpHPz0/RlXuzsS/vsLM51ZFPjw+RlzXwru5u8TeUD85ODxHbcy+ubm+y3tLPjs8QE7/z8O+vsLM5VtJQT9AR1XtzcG9vcHNfkw/Ojo+TO/IvLm6v9BfRTw5O0NY28W9u77G2l5JQD4/R1X00MbAv8PM5FpIPz0/R1rcxr27vMTaV0I7OTxGYtC/u7q+yvBOQDw8QE1z0sW/v8PM4l1LQ0BBSFX1z8S/vsLN8U9CPDw/S3rMvrq7v85sST06PEJU4ci+vL7G2GNLQj9AR1T708jCwcXN4V1LQj9AR1jjyr+8vcTWXkY9Oz1FXNbDvLu+yeZSQz09QExr1cfAv8TM4F9NRUJDSVX908fBv8PN6lVFPj0/S2vQwby8v8z/TD88PEJQ68vAvb7G1WpNREBBSFR91cnEw8bN4GFNRUBBSFbrzcK+vsTUZ0o/PD1FWN3Hvry+yN9YRj4+QUtl2cnCwMTM32NOR0NESlV71snDwcXN5VpIQD5ASmPWxb69v8vtUEI9PUFO+87Cvr/F03NPRkFCSFN32MvFxMfO32VPR0NDSVb1z8W/v8XRck1BPT5EVObKv72+x9tdSUA+QUtf3cvDwcXM3WdQSEVGSlV22cvFw8bN4l5LQz9CSl7cyL++wMrlVkU+PkJNctHFv7/F0f5TR0JDSFJw2szHxcjO32lRSUVFSlX/1MjCwcbQ/FFFPz9FUvDNwr6/x9dlS0I/QUpc4s3Fw8XM3GtSSkZHS1Zy3M3HxcjO32NORkJDSlziy8K/wcreW0hAPkJMadbHwMDFz/FWSURESFJt3c7Ix8nP3mxUS0dHS1V32MrEw8fP71ZIQUBFT33Qxb+/xtVuTkRAQkla6c/HxMbM229VS0hITFZv3s/Jx8nO3mlQSERFS1rqzsXBwsrbYUtCP0JLYdvKwsHFzupaS0VESFFp38/JyMrP3m9XTElITFZw3M3HxcjP6VtKQ0JGT27WyMHBxtJ9UUdCQ0lY8NHIxcbM2ndXTElJTFZt4NHLycrP3m5USkZGS1nz0sjDxMrZak5FQUNLXeDMxcLGzuVeTUdFSVBm4tHLycvQ3nRZTkpKTVZt38/Jx8nP5V9NRkRGTmjbysTCx9DzVklERElV/dXKxsfM2f9ZTkpKTVZs49PMysvQ3nNXTEhITFj/1srFxcrXdVJIQ0RLW+nPx8TGzd9jT0hGSU9j59PMysvQ3nhbT0xLTldr4tLLycrQ4mVPSEVHTmLfzcbEx8/qW0tFRUlUdtnMx8fM1/hcT0tKTVdr5tXOzMzR3nlaTkpKTVd32s3Hx8rV/FdKRUVLWPLSycXHzd1qUUpHSU9g69XNy8zR3X1dUU1MTldq5tXNysvQ32tUS0dITl/nz8jFyM/lX01HRklSbdzNycjM1vBeUExLTldp6dfPzc3S3n5dUExLTldv3s/JyMvV8FtMR0dLV//Xy8fHzdtxVUtISk9e8NjOy8zR3f5eU05NT1hp6tfOzMzR33FXTUlKTl3u1MrHyM7gZlBJR0pRaODPysnM1exhUk1MTldo69nQzs7T3v1fU01MTlhs4tLLyszU619PSUhLVXPbzcjIzNl8WE1JSk9d+NrPzM3R3fpgVU9OUFlp7drQzc7S3nlbT0tLT1z42MzJyc7dbVRLSEpQY+bSy8rM1OlmVU5MTlZm7tvSz8/U3vphVk9OT1hq59XNy83U52RSS0lMVGzez8rJzdj4XE5LS09b/9zRzc3R3PZjV1BPUllo79zTz8/U3v9dUU1MT1t9287Kys7cdlhNSktQX+zVzcvM1OVqV09NT1Zl8dzUz9DV3vdkWFFPUVlp69jPzc7U5GpWTUtMVGjk0svKzdbvX1BMS09ad9/Tzs7S3PJlWFJQU1po8t3V0NDV3vpgVE5NUFp13tHMy8/b/ltPS0tPXvTZzszN0+JvWVBOT1Zj9t7V0dHW3vVnWlNQU1lo79vSzs/V4m9ZT0xNU2Tq1c3LzdbqZFRNTE9Zb+LVz87S2+9oWlNRVFpn9d/X0tLW3vZkV1BPUVpv49TOzc/a9F5RTExPXP7c0M3N0992XFJPT1Zi+9/X0tLX3/NpW1VSVFpn9N3Uz9DV4XhcUU1OU2Hw2c/MztXmaVdOTU9YbOfX0M/S2+1rW1VSVVtn+OHZ1NTX3vNoWlNQU1ps6NjPztDZ7mNUTk1QW3jf087O095+XlRPUFZg/+LY1NPX3/JrXVdUVltn+N/X0tHW4P9fVE9PVF/53NHOztXjb1lQTk9YaevZ0s/T2+ttXVZTVVtn++Pa1tXY3/FrXFVSVFtq7NrSz9HZ62lXT05QWnDj1c/O0936YVZRUVZfe+Ta1dTY3/BtXlhWV1xn/OPZ1NPX3/pjV1FQVF5939TPz9Xgd1xST1BXZu/c1NHT2ulxXldVVltm/uXb19bZ3+9tXldUVVtp8d3V0dLZ6G1aUk9RWWzo2NDP09zzZVhSUlZfdufb1tXY3+9vX1pXWFxn/+bb1tXY3/ZnWlNSVV5249fQ0NXf/19VUFFXY/be1dLU2ud2X1lWV1tm/+fd2dja4O9vX1lWV1xo99/X09PZ5nRdVFBSWWnt29PQ09vuaVpUU1Zecurc19bZ3+5xYVtYWV1nfujd2NfZ3/JqXFZTVl1x6NnT0dXe+GNXUlJXYf7g19PU2uV7YlpXV1xlfOne2tnb4e5yYltYWFxn/OPZ1dXZ5HtfV1JTWWby3dXS1NvrbVxVVFdebu3e2NfZ3+10Y1xZWl5nfOre2tja4O9uXlhVV11u7NzV09bd8mdaVFNXX3vk2dXV2uT/ZVtYWFxleuvf29rc4e51ZFxZWl1n/+bc19ba4/5kWVRUWWT639fT1dvpcl5XVVddbO/f2tja3+x3ZV1aW15ne+zg29rb4e9xYFpXWF1s8N7X1dfd7mxcVlRXX3Xo29bW2uL6aF1ZWFxkd+zg3Nvc4u53Zl5bW15nfOnd2djb4/loW1ZWWWN+5NnV1drneGFZVldda/Xi29na3+t6Z15bXF9oee3i3dvc4e51ZFxZWV5r9uHZ1tfd7G9eWFVYXm/s3djW2uH2a15aWVxkde7i3dzd4u55aF9cXF5neuzf29nc4/VrXlhXWmJ56NvX1trl/2RbV1hdafrk3Nna3+p9aF9cXF9oeO/k3tzd4u54Zl1aW15q++Xb2Njd6nZhWldYXm3v39nX2uDybV9bWlxjc/Dk3tze4+57amFdXV9oeO7i3Nvc4/JuX1pYW2F0693Y19vj+2hcWFhcZ/7n3drb3+r/amBdXV9od/Dm393e4+17aV9cXF9p/+jd2trd6HxlW1hZXmv14tvY2t/vcGJcWlxjcPPl3t3e4+19a2JeXmBod/Dk3tzd4+9yY1xaW2Fw7t/a2dvi9mteWllcZnzq3tvb3+n9bGJeXWBodvPn4N7f5O19a2FdXV9pfOvf29vd5/5oXVpaXmn65dza29/tdWRdW11ib/bn397e5O1+bGRfX2FpdvPn393e5O92Zl5bXGFu8+Pc2tvi8m5gW1pdZXjs4Nzc3+j6bmNeXmBodfXp4t/g5e3/bWNfXmBpeu3i3dze5/prX1tbXmj/6N7b29/remdeXF1ibvrp4d7f5O3/bmVhX2JpdfXp4d7f5O56aV9dXWFt+Obd29zh73JjXFtdZHTv4t3c3+f3b2VfXmFodPfq4+Dh5u3/bmZgX2Fpd/Dl3t3f5vZuYlxcXmd769/c3N/qfmlfXV1ibf3r4t/f5O3+b2diYWRqdPfq4+Dg5e59a2JeXmJs/enf3N3h7XhmXlxdY3Hz5d7d3+f1cmdgX2Foc/jr5eLi5+79b2diYGNpdvPn4N7f5vRxZV5dXmZ37uLd3N/p/WxhXl5ibP/s5N/g5Oz8cGhjYmRqdPns5eLi5u7/bWRfX2Jr/+zh3d3h7HxpX11eY2/359/e3+bydmhiX2Jocvrs5uPj5+78cWlkYmRqdfbp4t/g5vF2Z19eX2Z08eXe3d/o+W5kX15ia3zu5eHg5ez7cmlkY2VqdPvt5+Pj5+7+b2ZhYGNrfO7k397i6/9rYV5eY2376uHe3+bweWpjYGJocfzt5+Tk6O78c2plZGVqdPnr5OHi5/B6amJfX2Zx9uff3t/n9nFmX19ianrw5+Lh5ez5dGpmZGZrdPzu6OXl6O78cWljYWRrefHn4N/i6vtuZF9fY2z/7OPf4OXvfGxlYmNocP7u6OXl6O77dWxnZWZrc/vt5uPj5+99bGRgYGZv+uri3+Dn83VoYV9iaXfz6ePi5ev4dmtnZWdrc/3v6ubm6e77dGplY2Vrd/Tp4uDj6vhxZmBfY2t97uXg4OXu/21mY2Nob//v6ebm6e76dm1oZmdrc/3v6OXk6O//bmZiYmZu/ezk4OHn8HlqY2BiaXX26uXj5ev2eG1oZmdrc/7x6+fn6e76dmxnZWZrdvfr5eLk6vZ1aWJhY2t68Ofi4eXt/W9oZGRob37x6ufm6e76eG5pZ2hsc/7w6ubm6e/+cGhkY2du/+7m4uLn73xsZWJjaXP57Obk5uv1em5pZ2hrc//y7Ono6u76eG1pZmdrdfrt5+Tl6vR4a2RiZGp39Onk4uXs+3JpZWRobnz06+jn6e75eW5qaGlsc//y6+jn6e78c2pmZGdtfPHo5OPn7v9uZ2NkaHH87efl5uvzfG9qZ2hsc//07erp6+/5eW9qaGhsdPzu6eXm6vN7bWZjZWp1+Ovl4+bs+XVrZmVobnr27Ono6u75em9raWptc//07eno6u/7dmxnZmhtevTq5eTn7v1waWRkaG//7+nm5uryfnBraGlscn717erq6+/5e3BraWlsdP7w6ufn6vF+b2hlZmpz++3n5Obr9nhsZ2ZobXn47eno6u74e3BsamttdH727urp6+/6eG5pZ2ltePfs5+Xo7fp0amZlaG9+8ern5+rx/3JsaWlscn327uvq7O/5fHFsamptc//z7Ojo6/H/cWpmZmpx/e/p5ufr9XpuaWdobXf67urp6u73fHJta2tudH737+zq7O/5em9raGltd/ru6efo7fh3bGdmaW589Ovo5+rw/nRtampscX337+zr7PD4fXNta2ttc3717erp6/D9dGxoZ2pw//Hq5+fr831vamhpbXb77+vq6+73fXNubGxudH348O3r7O/4fHFsamptdvzv6ujp7fd6bmlnaW569+3p6Orv/HZtampscXz58O3s7fD4fXRubGxudH337uvq7PD8dm1paGtwffTs6Ojr8v9xa2hpbXX98ezq6+72fnRubGxudH358e3s7fD4fXNta2tudf7y7Onp7fV8b2poaW14+e7q6evv+nhua2pscXv68e3s7fD4fnVvbW1udH348Ozr7PD6eW9raWtve/bt6enr8f50bGlpbHT/8+3r6+71/3ZvbW1vdHz68u7t7vH4fnVubGxudf/07erq7fR+cmxpam12/O/r6evv+XpvbGtscHr78u7t7vH4/3Zwbm1vdHz68e3s7fD6e3Bsamxvevnv6+rr8Px2bmpqbHN+9e7r7O71/ndvbW1vdHz78+/u7vH4/3ZvbW1udX727uzr7fT/dG1qam11/vLs6uvu+HxxbWttcHn89O7t7vH4/3dxbm5vdXz78+7t7vH5fHNta2xvefvw7Ors7/p5b2trbXJ99+/s7O70/Xhxbm5vdHz79fDu7/L4/3dxbm5vdX348O3s7vP9dm5ra210//Tt6+vu931zbmxtcHj99e/u7vH4/3hyb29wdXz89e/u7vH5fnVubG1veP3z7evs7/l7cGxrbXF7+fDt7O7z/Hlybm5vdHv89fHv7/L4/3lyb25vdX368u7t7vP8eW9sbG5zfvbu7Ozu9v91bm1tcHf+9vDu7vH3/3lzcG9xdXv99vHv7/L4/3ZvbW1vd/717uzt7/h9c21sbXF6+/Lu7e7z+3tzb25vdHv99vLv8PP4/3p0cG9wdXz78+/u7vP7enJubW5zfPjw7ezu9f53b21tb3f/9/Hv7/H3/np0cXBxdnv99/Lv7/P4/3hxbm5wdv/37+3t7/d+dW5tbXB5/PTu7e7z+3x0b29wdHr+9/Pw8fP4/np1cXBxdXz89fDu7/P6fHRvbW5ze/ry7u3u9P15cW5ub3Z++fLv7/L3/nt1cnFydnv++PPx8fP4/3lzb29xdn748e7u7/b/d29tbnB4/vXv7u7y+n12cW9wdHr++PPx8fT4/nt2cnFydnv99/Hv7/P6fXVvbm9yevz07+7v9Px6c29ucHZ9+vPw7/L3/Xt2cnFzdnv++fTy8vT4/np0cW9xdn368+/u8Pb+eHFubnB3//fw7u/y+X53cm9wdHr/+fTy8vT5/nx3c3Jzdnv++PPw8PT5fndxb29yef317+7v8/t8dG9vcHV8+/Xx8PL3/Xx3c3Jzdnv/+fXz8/T4/nt2cnFydnz79fDv8Pb9enNvb3B3fvjy7+/y+P94c3BxdHn/+vXz8vX5/nx4dHN0dnv/+fTy8fT5/3lzcG9zef/38e/v8/p9dnBvcHV8/Pby8PL2/H13dHJzd3v/+vb08/X5/nx3c3Jzdnz99vLw8fX8e3Vwb3F2ffrz8O/y+P95dHFxdHn/+vbz8/X5/X14dXR0d3v/+vbz8vX5/3p0cXBzeP/58/Dw8/l+d3JvcHV7/ffz8fL2/H14dXN0d3v/+/f19Pb5/X14dHN0d3z9+PPx8vX7fXZxcHF2fPv18fDy9/56dXJxdHl++/f08/X5/X15dnR1d3v/+/f08/X5/nt2cnFzeH769PHw8/n/eXNwcXR6/vj08vP2+355dXR0d3v/+/f19fb5/X15dnR0d3v++fTy8vX7fnhzcXJ2fP328vHy9/18dnNydHh+/Pf09PX5/X15dnV2eHv/+/f19Pb5/nx3dHJ0eH379vLx8/j+enVycXR5//n18vP2+/96dnR1d3v//Pj29ff5/X56dnV1d3v/+vbz8/b6/3l0cnJ2e/748/Lz9/x9d3RzdHh9/fj19Pb5/X56d3Z2eHv//Pj29fb5/X14dXN0eH389/Py9Pj+e3ZzcnR5//r28/P2+v97d3V1d3r//Pn29vf5/X56d3Z2eHv/+/f09Pb6/3p2c3N2ev/59fLz9vt+eHVzdHh9/fn29fb5/H56eHZ2eHv//Pn39vf5/X15dnR1eHz9+PXz9Pj9fHd0c3V5fvv39PT2+v97d3V1d3p+/fn39vf6/X57eHZ2eHv//Pj19fb6/3t3dHR2ev/69vP09vv/eXV0dXh8/vr29fb5/P97eHd3eHv//fr39/f6/X56d3V2eHz++fb09fj8fXh1c3V4ffz49fT2+f58eHZ2d3p+/fr49/j6/f97eXd3eHv//Pn29vf6/nx4dXR2ev/79/T09vr/enZ0dXd8//r39vb4/P97eXd3eXt+/fr49/j6/f97eHZ2eHz/+vf19fj8fnl2dHV4ff359vX2+f59eXZ2d3p+/fr49/j6/f98eXh4eXt+/fr39vf6/n15dnV2eX78+PX19vr/e3d1dXd7//v49vb4/P98eXh4eXt+/fv5+Pj6/f98eXd3eXz/+/j29vj7/3p3dXV4fP769vX2+f19end2d3p9/vv4+Pj6/f98enh4eXt+/fr49/j6/X56d3Z3eX39+fb19/r+fHh2dnd7//z49/f4+/98enh4eXt+/vv5+Pn6/f98eXh4eXv//Pn39vj7/3t4dnZ4fP/69/b2+f1+enh3d3p9/vv5+Pj6/f99enl5ent+/vv5+Pj6/X57eHd3eX3++vf29/r+fXl3dnd6fvz59/f4+/99enh4eXt+/vv6+fn6/f99enh4eXv//fr49/j7/3x5d3Z4e//7+Pb3+fz/e3h3eHp9//z5+Pn6/f99e3l5enx+/vv5+Pn6/f97eXd4eX3/+/j39/n9fnp3d3h6fv36+Pf5+/59e3l4eXt+/vz6+fn7/f99e3l5enx+/fr4+Pj7/n16d3d4e//8+ff3+fz/fHl4eHp9//z6+fn6/f99e3p5enx+/vz6+fn7/f98enh4enz//Pn39/n9fnt4d3h6ff76+Pj5+/5+e3l5eXt+//z6+vr7/f99e3p5enx+/vv5+Pn7/n56eHd4e379+vj3+fz/fHl4eHp8//z6+fn6/P99e3p6enx+//z7+vr7/f99enl5enz//Pn4+Pn8/3x5eHh6ff77+fj5+/5+e3p5ent+//z7+vr7/f9+fHp6enx+/vz6+fn7/n57eXh5e37++vj4+fv/fXp4eHp8//37+fn6/P9+fHp6e3x+//37+vr7/f99e3l5enz//fr5+Pr8/3x6eHh6ff/8+fj5+/3/fHp5ent+//37+vr7/f9+fHt6e3x+//z6+fr7/f98enl5e37++/n4+fv+fnt5eXp8//37+vn6/P9+fHt6e3x+//37+vr7/f9+e3p6enz//fv5+fr8/316eXl6fP/8+vn5+/3/fHp6ent9//37+vr7/f9+fHt6e3x+//37+vr7/f98enl5e33//Pr5+fv+fnt5eXp8fv77+vr6/P5+fHt6e3x+//38+/v7/f9+fHt6e3x+/vz6+fr8/317eXl6fP/9+/n5+/3/fXt6ent9//38+/v7/f9+fXt7e3x+//37+vr7/f99e3p6e33//Pr5+fv9/3x6eXp8fv78+vr7/P5+fXt7e3x+//38+/v8/f9+fHt6e3x+/vz6+vr8/n58enl6fP/9+/r5+/3/fXt6ent9//78+/v8/f9+fXx7e3x+//38+/v7/f99e3p6e33//fv6+vv9/3x6enp7fv/8+/r7/P7/fXt7e3x+//78+/v8/f9+fXt7e3x+//37+vr8/n58enp6fH7+/Pr6+/z/fnx6ent9//78+/v8/f//fXx7fHx+//78+/v8/f9+fHt6e33//fv6+vv9/317enp7ff/9+/r7/P7/fXx7e3x+//79/Pz8/f//fXx7e3x+//37+/v8/v99e3p6fH7+/Pv6+/z/fnx7e3t9//78+/v8/f//fXx8fH1+//79/Pv8/f9+fHt7e33//vz7+vv9/317enp7ff/9+/v7/P7/fXx7e3x+//79/Pz8/f//fXx8fHx+//38+/v8/v99e3p7fH7//fv6+/z+fnx7e3t9//79/Pv8/f7/fXx8fH1+//79/Pz8/f//fXx7e33//vz7+/v9/358e3t7ff/+/Pv7/P7/fnx8fHx+//79/Pz8/f//fnx8fH1+//78+/v8/f9+fHt7fH7//fv7+/z+/317e3t9fv/9/Pz8/f7/fn18fH1+//79/Pz8/f//fXx7fH1+//37+/v9/358e3t7ff/+/Pv7/P3/fn18fHx+//79/Pz9/f//fn18fH1+//79/Pz8/f9+fHt7fH3//vz7+/z+/318e3t9fv/9/Pz8/f7/fn18fH1+//79/fz8/f//fnx8fH1+//38+/z9/v99fHt8ff/+/fz7/P3/fn18fHx+///9/fz9/f//fn18fH1+//79/Pz8/f9+fXx7fH3//vz7+/z+/358e3x9fv/+/Pz8/f7/fn18fH1+///+/fz9/f//fn18fH1+//78/Pz9/v99fHt8fX7//fz7/P3/fn18fHx9///+/fz9/f//fn19fX1+///9/Pz8/f//fXx8fH3//v38+/z+/358fHx9fv/+/fz8/f7/fn19fX1+///+/f39/f7/fn18fH1+//79/Pz9/v9+fHx8fX7//fz8/P3//318fHx9///+/f39/f7/fn19fX1+///+/fz9/f//fXx8fH3///38/Pz9/359fHx9fv/+/fz8/f7/fn19fX1+///+/f39/v7/fn19fX1+//79/Pz9/v9+fXx8fX7//vz8/P3+/359fH19////////////////////////////////////AA=="}; // \SpectrumVoip\\\\NetSapiens\Model\UpdateMohDomainBase64Request

try {
    $result = $apiInstance->updateMohUserBase64($domain, $user, $index, $update_moh_domain_base64_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaMusicOnHoldUserApi->updateMohUserBase64: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **index** | **string**|  | |
| **update_moh_domain_base64_request** | [**\SpectrumVoip\\\\NetSapiens\Model\UpdateMohDomainBase64Request**](../Model/UpdateMohDomainBase64Request.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMohUserFileUpload()`

```php
updateMohUserFileUpload($domain, $user, $index, $synchronous, $script, $file, $convert): object
```

Update a MOH for User from Upload (Multipart/Mixed Post)

> Note: # and anything after is NOT needed, its just to allow multiple examples for the same path/method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MediaMusicOnHoldUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$index = 2; // string | 
$synchronous = 'synchronous_example'; // string | When synchronous is requested with \\\"yes\\\" the response will be a 200 on success and will contain a valid JSON representiation of the new resource. If no or left off request a 202 \\\"Accepted\\\" will be given in a success case and this can be considered a success. Synchronous responses will be a little slower as the API will process the geo replication request and wait till the local copy has been written and can be read back berfore sending a response.
$script = 'script_example'; // string | This is a simple explanation of what the audio is and can include what is said in the audio file for explanation.
$file = '/path/to/file.txt'; // \SplFileObject | This is a \\\"File\\\" type parameter that needs to include the audio file in question using a file post method.
$convert = 'convert_example'; // string | Setting yes will allow the API to attempt to convert the file from accepted formats into the correct format for media playback

try {
    $result = $apiInstance->updateMohUserFileUpload($domain, $user, $index, $synchronous, $script, $file, $convert);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaMusicOnHoldUserApi->updateMohUserFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **index** | **string**|  | |
| **synchronous** | **string**| When synchronous is requested with \\\&quot;yes\\\&quot; the response will be a 200 on success and will contain a valid JSON representiation of the new resource. If no or left off request a 202 \\\&quot;Accepted\\\&quot; will be given in a success case and this can be considered a success. Synchronous responses will be a little slower as the API will process the geo replication request and wait till the local copy has been written and can be read back berfore sending a response. | |
| **script** | **string**| This is a simple explanation of what the audio is and can include what is said in the audio file for explanation. | [optional] |
| **file** | **\SplFileObject****\SplFileObject**| This is a \\\&quot;File\\\&quot; type parameter that needs to include the audio file in question using a file post method. | [optional] |
| **convert** | **string**| Setting yes will allow the API to attempt to convert the file from accepted formats into the correct format for media playback | [optional] |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMohUserTTS()`

```php
updateMohUserTTS($domain, $user, $index, $update_moh_domain_tts_request): \SpectrumVoip\\\\NetSapiens\Model\Audiofile
```

Update MOH for Domain from TTS



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MediaMusicOnHoldUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = '~'; // string | 
$index = 'index_example'; // string | 
$update_moh_domain_tts_request = new \SpectrumVoip\\\\NetSapiens\Model\UpdateMohDomainTTSRequest(); // \SpectrumVoip\\\\NetSapiens\Model\UpdateMohDomainTTSRequest

try {
    $result = $apiInstance->updateMohUserTTS($domain, $user, $index, $update_moh_domain_tts_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaMusicOnHoldUserApi->updateMohUserTTS: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **index** | **string**|  | |
| **update_moh_domain_tts_request** | [**\SpectrumVoip\\\\NetSapiens\Model\UpdateMohDomainTTSRequest**](../Model/UpdateMohDomainTTSRequest.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Audiofile**](../Model/Audiofile.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
