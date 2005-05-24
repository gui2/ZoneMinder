<?php
//
// ZoneMinder web Danish language file, $Date$, $Revision$
// Copyright (C) 2003, 2004, 2005  Philip Coombes
//
// This program is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License
// as published by the Free Software Foundation; either version 2
// of the License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with this program; if not, write to the Free Software
// Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
//

// ZoneMinder Danish Translation by Tom Stage

// Notes for Translators
// 0. Get some credit, put your name in the line above (optional)
// 1. When composing the language tokens in your language you should try and keep to roughly the
//   same length text if possible. Abbreviate where necessary as spacing is quite close in a number of places.
// 2. There are four types of string replacement
//   a) Simple replacements are words or short phrases that are static and used directly. This type of
//     replacement can be used 'as is'.
//   b) Complex replacements involve some dynamic element being included and so may require substitution
//     or changing into a different order. The token listed in this file will be passed through sprintf as
//     a formatting string. If the dynamic element is a number you will usually need to use a variable
//     replacement also as described below.
//   c) Variable replacements are used in conjunction with complex replacements and involve the generation
//     of a singular or plural noun depending on the number passed into the zmVlang function. See the 
//     the zmVlang section below for a further description of this.
//   d) Optional strings which can be used to replace the prompts and/or help text for the Options section
//     of the web interface. These are not listed below as they are quite large and held in the database
//     so that they can also be used by the zmconfig.pl script. However you can build up your own list
//     quite easily from the Config table in the database if necessary.
// 3. The tokens listed below are not used to build up phrases or sentences from single words. Therefore
//   you can safely assume that a single word token will only be used in that context.
// 4. In new language files, or if you are changing only a few words or phrases it makes sense from a 
//   maintenance point of view to include the original language file and override the old definitions rather
//   than copy all the language tokens across. To do this change the line below to whatever your base language
//   is and uncomment it.
// require_once( 'zm_lang_en_gb.php' );

// You may need to change the character set here, if your web server does not already
// do this by default, uncomment this if required.
//
// Example
// header( "Content-Type: text/html; charset=iso-8859-1" );
header( "Content-Type: text/html; charset=windows-1252" );

// You may need to change your locale here if your default one is incorrect for the
// language described in this file, or if you have multiple languages supported.
// If you do need to change your locale, be aware that the format of this function
// is subtlely different in versions of PHP before and after 4.3.0, see
// http://uk2.php.net/manual/en/function.setlocale.php for details.
// Also be aware that changing the whole locale may affect some floating point or decimal 
// arithmetic in the database, if this is the case change only the individual locale areas
// that don't affect this rather than all at once. See the examples below.
// Finally, depending on your setup, PHP may not enjoy have multiple locales in a shared 
// threaded environment, if you get funny errors it may be this.
//
// Examples
// setlocale( 'LC_ALL', 'en_GB' ); All locale settings pre-4.3.0
// setlocale( LC_ALL, 'en_GB' ); All locale settings 4.3.0 and after
// setlocale( LC_CTYPE, 'en_GB' ); Character class settings 4.3.0 and after
// setlocale( LC_TIME, 'en_GB' ); Date and time formatting 4.3.0 and after

// Simple String Replacements
$zmSlang24BitColour          = '24 bit farve';
$zmSlang8BitGrey             = '8 bit greyscale';
$zmSlangActual               = 'Aktuel';
$zmSlangAddNewControl        = 'Tilf�j Ny kontrol';
$zmSlangAddNewMonitor        = 'Tilf�j Ny Monitor';
$zmSlangAddNewUser           = 'Tilf�j Ny Bruger';
$zmSlangAddNewZone           = 'Tilf�j Ny Zone';
$zmSlangAlarm                = 'Alarm';
$zmSlangAlarmBrFrames        = 'Alarm<br/>Billeder';
$zmSlangAlarmFrame           = 'Alarm Billede';
$zmSlangAlarmFrameCount      = 'Alarm Billede T�ller';
$zmSlangAlarmLimits          = 'Alarm Begr�ndsing';
$zmSlangAlarmPx              = 'Alarm Px';
$zmSlangAlert                = 'Alarm';
$zmSlangAll                  = 'Alle';
$zmSlangApply                = 'Aktiver';
$zmSlangApplyingStateChange  = 'Aktivere State �ndring';
$zmSlangArchArchived         = 'Kun Arkiverede';
$zmSlangArchive              = 'Arkiver';
$zmSlangArchUnarchived       = 'Kun Ikke Arkiverede';
$zmSlangAttrAlarmFrames      = 'Alarm Billeder';
$zmSlangAttrArchiveStatus    = 'Arkiverings Status';
$zmSlangAttrAvgScore         = 'Avg. Skore';
$zmSlangAttrCause            = '�rsag';
$zmSlangAttrDate             = 'Dato';
$zmSlangAttrDateTime         = 'Dato/Tid';
$zmSlangAttrDiskBlocks       = 'Disk Blocks';
$zmSlangAttrDiskPercent      = 'Disk Procent';
$zmSlangAttrDuration         = 'Forl�b';
$zmSlangAttrFrames           = 'Billeder';
$zmSlangAttrId               = 'Id';
$zmSlangAttrMaxScore         = 'Max. Skore';
$zmSlangAttrMonitorId        = 'Monitor Id';
$zmSlangAttrMonitorName      = 'Monitor Navn';
$zmSlangAttrName             = 'Navn';
$zmSlangAttrTime             = 'Tid';
$zmSlangAttrTotalScore       = 'Total Skore';
$zmSlangAttrWeekday          = 'Uge Dag';
$zmSlangAutoArchiveEvents    = 'Automatisk arkiver alle matchende';
$zmSlangAutoDeleteEvents     = 'Automatisk slet alle matchende';
$zmSlangAutoEmailEvents      = 'Automatisk email detalier af alle matchende';
$zmSlangAutoExecuteEvents    = 'Automatisk k�r kommando p� alle matchende';
$zmSlangAuto                 = 'Auto';
$zmSlangAutoMessageEvents    = 'Send Automatisk detalier af alle matchende';
$zmSlangAutoUploadEvents     = 'Upload Automatisk alle matchende';
$zmSlangAvgBrScore           = 'Avg.<br/>Skore';
$zmSlangBadNameChars         = 'Navne m� kun indeholde alphanumeric karaktere plus hyphen og underscore';
$zmSlangBandwidth            = 'B�ndbrede';
$zmSlangBlobPx               = 'Blob Px';
$zmSlangBlobs                = 'Blobs';
$zmSlangBlobSizes            = 'Blob St�relse';
$zmSlangBrightness           = 'Brightness';
$zmSlangBuffers              = 'Buffere';
$zmSlangCanAutoFocus         = 'Kan Auto Focus';
$zmSlangCanAutoGain          = 'Kan Auto Gain';
$zmSlangCanAutoIris          = 'Kan Auto Iris';
$zmSlangCanAutoWhite         = 'Kan Auto White Bal.';
$zmSlangCanAutoZoom          = 'Kan Auto Zoom';
$zmSlangCancel               = 'Fortryd';
$zmSlangCancelForcedAlarm    = 'Fortryd&nbsp;Forced&nbsp;Alarm';
$zmSlangCanFocusAbs          = 'Kan Focus Absolut';
$zmSlangCanFocus             = 'Kan Focus';
$zmSlangCanFocusCon          = 'Kan Focus Kontinuerligt';
$zmSlangCanFocusRel          = 'Kan Focus Relativt';
$zmSlangCanGainAbs           = 'Kan Gain Absolut';
$zmSlangCanGain              = 'Kan Gain ';
$zmSlangCanGainCon           = 'Kan Gain Kontinuerligt';
$zmSlangCanGainRel           = 'Kan Gain Relativt';
$zmSlangCanIrisAbs           = 'Kan Iris Absolut';
$zmSlangCanIris              = 'Kan Iris';
$zmSlangCanIrisCon           = 'Kan Iris Kontinuerligt';
$zmSlangCanIrisRel           = 'Kan Iris Relativt';
$zmSlangCanMoveAbs           = 'Kan Bev�ge Absolut';
$zmSlangCanMove              = 'Kan Bev�ge';
$zmSlangCanMoveCon           = 'Kan Bev�ge Kontinuerligt';
$zmSlangCanMoveDiag          = 'Kan Bev�ge Diagonalt';
$zmSlangCanMoveMap           = 'Kan Bev�ge Mapped';
$zmSlangCanMoveRel           = 'Kan Bev�ge Relativt';
$zmSlangCanPan               = 'Kan Pan' ;
$zmSlangCanReset             = 'Kan Reset';
$zmSlangCanSetPresets        = 'Kan Set Presets';
$zmSlangCanSleep             = 'Kan Sove';
$zmSlangCanTilt              = 'Kan Tilt';
$zmSlangCanWake              = 'Kan V�gne';
$zmSlangCanWhiteAbs          = 'Kan White Bal. Absolut';
$zmSlangCanWhiteBal          = 'Kan White Bal.';
$zmSlangCanWhite             = 'Kan White Balance';
$zmSlangCanWhiteCon          = 'Kan White Bal. Kontinuerligt';
$zmSlangCanWhiteRel          = 'Kan White Bal. Relativt';
$zmSlangCanZoomAbs           = 'Kan Zoom Absolut';
$zmSlangCanZoom              = 'Kan Zoom';
$zmSlangCanZoomCon           = 'Kan Zoom Kontinuerligt';
$zmSlangCanZoomRel           = 'Kan Zoom Relativt';
$zmSlangCaptureHeight        = 'Capture Height';
$zmSlangCapturePalette       = 'Capture Palette';
$zmSlangCaptureWidth         = 'Capture Width';
$zmSlangCause                = '�rsag';
$zmSlangCheckAll             = 'Marker Alle';
$zmSlangCheckMethod          = 'Alarm Check Methode';
$zmSlangChooseFilter         = 'V�lg Filter';
$zmSlangClose                = 'Luk';
$zmSlangColour               = 'Farve';
$zmSlangCommand              = 'Kommando';
$zmSlangConfig               = 'konfig';
$zmSlangConfiguredFor        = 'Konfigureret for';
$zmSlangConfirmPassword      = 'Verifiser Password';
$zmSlangConjAnd              = 'og';
$zmSlangConjOr               = 'eller';
$zmSlangConsole              = 'Konsol';
$zmSlangContactAdmin         = 'Kontakt Din adminstrator for detalier.';
$zmSlangContinue             = 'Forts�t';
$zmSlangContrast             = 'Kontrast';
$zmSlangControlAddress       = 'Kontrol Addresse';
$zmSlangControlCap           = 'Kontrol Capability';
$zmSlangControlCaps          = 'Kontrol Capabilities';
$zmSlangControl              = 'Kontrol';
$zmSlangControlDevice        = 'Kontrol Enhed';
$zmSlangControllable         = 'Controllable';
$zmSlangControlType          = 'Kontrol Type';
$zmSlangCycle                = 'Cycle';
$zmSlangCycleWatch           = 'Cycle Watch';
$zmSlangDay                  = 'Dag';
$zmSlangDeleteAndNext        = 'Slet &amp; N�ste';
$zmSlangDeleteAndPrev        = 'Slet &amp; Forrige';
$zmSlangDelete               = 'Slet';
$zmSlangDeleteSavedFilter    = 'Slet Gemte filter';
$zmSlangDescription          = 'Beskrivelse';
$zmSlangDeviceChannel        = 'Enheds Kanal';
$zmSlangDeviceFormat         = 'Enheds Format (0=PAL,1=NTSC etc)';
$zmSlangDeviceNumber         = 'Enheds Nummer (/dev/video?)';
$zmSlangDimensions           = 'Dimentioner';
$zmSlangDisk                 = 'Disk';
$zmSlangDuration             = 'Forl�b';
$zmSlangEdit                 = 'Rediger';
$zmSlangEmail                = 'Email';
$zmSlangEnabled              = 'Aktiv';
$zmSlangEnterNewFilterName   = 'Skriv Nyt filter navn';
$zmSlangErrorBrackets        = 'Fejl, check at du har lige antal af �bnings og Lukkende brackets';
$zmSlangError                = 'Fejl';
$zmSlangErrorValidValue      = 'Fejl, check at alle terms har en valid v�rdig';
$zmSlangEtc                  = 'etc';
$zmSlangEvent                = 'Event';
$zmSlangEventFilter          = 'Event Filter';
$zmSlangEventId              = 'Event Id';
$zmSlangEventName            = 'Event Navn';
$zmSlangEventPrefix          = 'Event Prefix';
$zmSlangEvents               = 'Events';
$zmSlangExclude              = 'Exclude';
$zmSlangFar                  = 'Far';
$zmSlangFeed                 = 'Feed';
$zmSlangFilterPx             = 'Filter Px';
$zmSlangFirst                = 'F�rste';
$zmSlangFocus                = 'Fokus';
$zmSlangForceAlarm           = 'Tving&nbsp;Alarm';
$zmSlangFPS                  = 'fps';
$zmSlangFPSReportInterval    = 'FPS Raport Interval';
$zmSlangFrame                = 'Billede';
$zmSlangFrameId              = 'Billede Id';
$zmSlangFrameRate            = 'Billede Rate';
$zmSlangFrames               = 'Billede';
$zmSlangFrameSkip            = 'Billede Skip';
$zmSlangFTP                  = 'FTP';
$zmSlangFunc                 = 'Func';
$zmSlangFunction             = 'Funktion';
$zmSlangGain                 = 'Gain';
$zmSlangGenerateVideo        = 'Generer Video';
$zmSlangGeneratingVideo      = 'Generere Video';
$zmSlangGoToZoneMinder       = 'G� til ZoneMinder.com';
$zmSlangGrey                 = 'Gr�';
$zmSlangGroups               = 'Grupper';
$zmSlangHasFocusSpeed        = 'Har Fokus Hastighed';
$zmSlangHasGainSpeed         = 'Har Gain Hastighed';
$zmSlangHasHomePreset        = 'Har Hjem Preset';
$zmSlangHasIrisSpeed         = 'Har Iris Hastighed';
$zmSlangHasPanSpeed          = 'Har Pan Hastighed';
$zmSlangHasPresets           = 'Har Presets';
$zmSlangHasTiltSpeed         = 'Har Tilt Hastighed';
$zmSlangHasTurboPan          = 'Har Turbo Pan';
$zmSlangHasTurboTilt         = 'Har Turbo Tilt';
$zmSlangHasWhiteSpeed        = 'Har White Bal. Hastighed';
$zmSlangHasZoomSpeed         = 'Har Zoom Hastighed';
$zmSlangHighBW               = 'H�j&nbsp;B/B';
$zmSlangHigh                 = 'H�j';
$zmSlangHome                 = 'Hjem';
$zmSlangHour                 = 'Time';
$zmSlangHue                  = 'Hue';
$zmSlangId                   = 'Id';
$zmSlangIdle                 = 'Idle';
$zmSlangIgnore               = 'Ignorer';
$zmSlangImageBufferSize      = 'Billede Buffer St�relse (Billeder)';
$zmSlangImage                = 'Billede';
$zmSlangInclude              = 'Inkluder';
$zmSlangIn                   = 'Ind';
$zmSlangInverted             = 'Inverteret';
$zmSlangIris                 = 'Iris';
$zmSlangLanguage             = 'Sprog';
$zmSlangLast                 = 'Sidste';
$zmSlangLimitResultsPost     = 'results only;'; // This is used at the end of the phrase 'Limit to first N results only'
$zmSlangLimitResultsPre      = 'Limit to first'; // This is used at the beginning of the phrase 'Limit to first N results only'
$zmSlangLoad                 = 'Load';
$zmSlangLocal                = 'Lokal';
$zmSlangLoggedInAs           = 'Logget Ind Som';
$zmSlangLoggingIn            = 'Logger Ind';
$zmSlangLogin                = 'Logind';
$zmSlangLogout               = 'Logud';
$zmSlangLowBW                = 'Lav&nbsp;B/B';
$zmSlangLow                  = 'Lav';
$zmSlangMain                 = 'Main';
$zmSlangMan                  = 'Man';
$zmSlangManual               = 'Manual';
$zmSlangMark                 = 'Marker';
$zmSlangMaxBrScore           = 'Max.<br/>Skore';
$zmSlangMaxFocusRange        = 'Max Focus Range';
$zmSlangMaxFocusSpeed        = 'Max Focus Speed';
$zmSlangMaxFocusStep         = 'Max Focus Step';
$zmSlangMaxGainRange         = 'Max Gain Range';
$zmSlangMaxGainSpeed         = 'Max Gain Speed';
$zmSlangMaxGainStep          = 'Max Gain Step';
$zmSlangMaximumFPS           = 'Maximale FPS';
$zmSlangMaxIrisRange         = 'Max Iris Range';
$zmSlangMaxIrisSpeed         = 'Max Iris Speed';
$zmSlangMaxIrisStep          = 'Max Iris Step';
$zmSlangMax                  = 'Max';
$zmSlangMaxPanRange          = 'Max Pan Range';
$zmSlangMaxPanSpeed          = 'Max Pan Speed';
$zmSlangMaxPanStep           = 'Max Pan Step';
$zmSlangMaxTiltRange         = 'Max Tilt Range';
$zmSlangMaxTiltSpeed         = 'Max Tilt Speed';
$zmSlangMaxTiltStep          = 'Max Tilt Step';
$zmSlangMaxWhiteRange        = 'Max White Bal. Range';
$zmSlangMaxWhiteSpeed        = 'Max White Bal. Speed';
$zmSlangMaxWhiteStep         = 'Max White Bal. Step';
$zmSlangMaxZoomRange         = 'Max Zoom Range';
$zmSlangMaxZoomSpeed         = 'Max Zoom Speed';
$zmSlangMaxZoomStep          = 'Max Zoom Step';
$zmSlangMediumBW             = 'Medium&nbsp;B/B';
$zmSlangMedium               = 'Medium';
$zmSlangMinAlarmGeMinBlob    = 'Minimum alarm pixels b�r v�re st�re end eller ligmed til minimum blob pixels';
$zmSlangMinAlarmGeMinFilter  = 'Minimum alarm pixels b�r v�re st�re end eller ligmed til minimum filter pixels';
$zmSlangMinAlarmPixelsLtMax  = 'Minimum alarm pixels b�r v�re mindre end maximum alarm pixels';
$zmSlangMinBlobAreaLtMax     = 'Minimum blob omr�de b�r v�re mindre end maximum blob �mr�de';
$zmSlangMinBlobsLtMax        = 'Minimum blobs b�r v�re mindre end maximum blobs';
$zmSlangMinFilterPixelsLtMax = 'Minimum filter pixels b�r v�re mindre end maximum filter pixels';
$zmSlangMinFocusRange        = 'Min Focus Range';
$zmSlangMinFocusSpeed        = 'Min Focus Speed';
$zmSlangMinFocusStep         = 'Min Focus Step';
$zmSlangMinGainRange         = 'Min Gain Range';
$zmSlangMinGainSpeed         = 'Min Gain Speed';
$zmSlangMinGainStep          = 'Min Gain Step';
$zmSlangMinIrisRange         = 'Min Iris Range';
$zmSlangMinIrisSpeed         = 'Min Iris Speed';
$zmSlangMinIrisStep          = 'Min Iris Step';
$zmSlangMinPanRange          = 'Min Pan Range';
$zmSlangMinPanSpeed          = 'Min Pan Speed';
$zmSlangMinPanStep           = 'Min Pan Step';
$zmSlangMinPixelThresLtMax   = 'Minimum pixel threshold b�r v�re mindre end maximum pixel threshold';
$zmSlangMinTiltRange         = 'Min Tilt Range';
$zmSlangMinTiltSpeed         = 'Min Tilt Speed';
$zmSlangMinTiltStep          = 'Min Tilt Step';
$zmSlangMinWhiteRange        = 'Min White Bal. Range';
$zmSlangMinWhiteSpeed        = 'Min White Bal. Speed';
$zmSlangMinWhiteStep         = 'Min White Bal. Step';
$zmSlangMinZoomRange         = 'Min Zoom Range';
$zmSlangMinZoomSpeed         = 'Min Zoom Speed';
$zmSlangMinZoomStep          = 'Min Zoom Step';
$zmSlangMisc                 = 'Misc';
$zmSlangMonitorIds           = 'Monitor&nbsp;Ids';
$zmSlangMonitor              = 'Monitor';
$zmSlangMonitors             = 'Monitore';
$zmSlangMontage              = 'Montage';
$zmSlangMonth                = 'M�ned';
$zmSlangMove                 = 'Flyt';
$zmSlangMustBeGe             = 'skal v�re st�re end eller ligmed';
$zmSlangMustBeLe             = 'Skal v�re mindre end eller ligmed';
$zmSlangMustConfirmPassword  = 'Du skal konfimere password';
$zmSlangMustSupplyPassword   = 'Du skal angive et password';
$zmSlangMustSupplyUsername   = 'Du skal opgive et username';
$zmSlangName                 = 'Navn';
$zmSlangNear                 = 'Near';
$zmSlangNetwork              = 'Netv�rk';
$zmSlangNewGroup             = 'Ny Gruppe';
$zmSlangNew                  = 'Ny';
$zmSlangNewPassword          = 'Nyt Password';
$zmSlangNewState             = 'Ny State';
$zmSlangNewUser              = 'Ny User';
$zmSlangNext                 = 'N�ste';
$zmSlangNoFramesRecorded     = 'Der er ingen billeder optaget for denne event';
$zmSlangNoGroups             = 'Ingen grupper defineret';
$zmSlangNoneAvailable        = 'Ingen Tilstede';
$zmSlangNone                 = 'Ingen';
$zmSlangNo                   = 'Nej';
$zmSlangNormal               = 'Normal';
$zmSlangNoSavedFilters       = 'NoSavedFilters';
$zmSlangNoStatisticsRecorded = 'Der er ingen statestikker optaget for denne event/frame';
$zmSlangNumPresets           = 'Num Presets';
$zmSlangOpen                 = '�ben';
$zmSlangOpEq                 = 'ligmed';
$zmSlangOpGtEq               = 'st�re end eller ligmed';
$zmSlangOpGt                 = 'st�re end';
$zmSlangOpIn                 = 'i s�ttet';
$zmSlangOpLtEq               = 'mindre end eller ligmed';
$zmSlangOpLt                 = 'mindre end';
$zmSlangOpMatches            = 'matches';
$zmSlangOpNe                 = 'ikke ligmed';
$zmSlangOpNotIn              = 'ikke i s�ttet';
$zmSlangOpNotMatches         = 'does not match';
$zmSlangOptionHelp           = 'OptionHelp';
$zmSlangOptionRestartWarning = 'Disse �ndringer tr�der ikke i fuld effect\nmens systemt k�re. N�r du har\nafsluttet �ndringer bedes du\ngenstarte ZoneMinder.';
$zmSlangOptions              = 'Indstillinger';
$zmSlangOrEnterNewName       = 'eller skriv nyt navn';
$zmSlangOrientation          = 'Orientation';
$zmSlangOut                  = 'Ud';
$zmSlangOverwriteExisting    = 'Overskriv Eksisterende';
$zmSlangPaged                = 'Paged';
$zmSlangPan                  = 'Pan';
$zmSlangPanTilt              = 'Pan/Tilt';
$zmSlangParameter            = 'Parameter';
$zmSlangPassword             = 'Password';
$zmSlangPasswordsDifferent   = 'Det nye og konfimerede passwords er forskellige';
$zmSlangPaths                = 'Stiger';
$zmSlangPhoneBW              = 'Telefon&nbsp;B/B';
$zmSlangPhone                = 'Telefon';
$zmSlangPixels               = 'pixels';
$zmSlangPlayAll              = 'Afspil Alle';
$zmSlangPleaseWait           = 'Vent venligst';
$zmSlangPostEventImageBuffer = 'Efter Event Billed Buffer';
$zmSlangPreEventImageBuffer  = 'F�r Event Billed Buffer';
$zmSlangPreset               = 'Preset';
$zmSlangPresets              = 'Presets';
$zmSlangPrev                 = 'Prev';
$zmSlangRate                 = 'Rate';
$zmSlangReal                 = 'Real';
$zmSlangRecord               = 'Optag';
$zmSlangRefImageBlendPct     = 'Reference Billede Blend %ge';
$zmSlangRefresh              = 'Opdater';
$zmSlangRemoteHostName       = 'Remote Host Navn';
$zmSlangRemoteHostPath       = 'Remote Host Stig';
$zmSlangRemoteHostPort       = 'Remote Host Port';
$zmSlangRemoteImageColours   = 'Remote Image Farver';
$zmSlangRemote               = 'Remote';
$zmSlangRename               = 'Omd�b';
$zmSlangReplay               = 'Spil Igen';
$zmSlangResetEventCounts     = 'Reset Event Counts';
$zmSlangReset                = 'Nulstil';
$zmSlangRestarting           = 'Genstarter';
$zmSlangRestart              = 'Genstart';
$zmSlangRestrictedCameraIds  = 'Begranset Kamera Ids';
$zmSlangReturnDelay          = 'Return Delay';
$zmSlangReturnLocation       = 'Return Location';
$zmSlangRotateLeft           = 'Rotate Left';
$zmSlangRotateRight          = 'Rotate Right';
$zmSlangRunMode              = 'K�rsels Mode';
$zmSlangRunning              = 'K�re';
$zmSlangRunState             = 'Run State';
$zmSlangSaveAs               = 'Gem Som';
$zmSlangSaveFilter           = 'Gem Filter';
$zmSlangSave                 = 'Gem';
$zmSlangScale                = 'Scale';
$zmSlangScore                = 'Skore';
$zmSlangSecs                 = 'Sekunder';
$zmSlangSectionlength        = 'Sektion l�ngde';
$zmSlangSelect               = 'V�lg';
$zmSlangSetLearnPrefs        = 'Set Learn Prefs'; // This can be ignored for now
$zmSlangSetNewBandwidth      = 'S�t Ny B�ndbrede';
$zmSlangSetPreset            = 'S�t Preset';
$zmSlangSet                  = 'S�t';
$zmSlangSettings             = 'Indstillinger';
$zmSlangShowFilterWindow     = 'VisFilterVindue';
$zmSlangSleep                = 'Sov';
$zmSlangSortAsc              = 'Asc';
$zmSlangSortBy               = 'Sorter efter';
$zmSlangSortDesc             = 'Desc';
$zmSlangSource               = 'Enhed';
$zmSlangSourceType           = 'Enheds Type';
$zmSlangSpeedHigh            = 'H�j Hastighed';
$zmSlangSpeedLow             = 'Lav Hastighed';
$zmSlangSpeedMedium          = 'Medium Hastighed';
$zmSlangSpeed                = 'Hastighed';
$zmSlangSpeedTurbo           = 'Turbo Hastighed';
$zmSlangStart                = 'Start';
$zmSlangState                = 'State';
$zmSlangStats                = 'Stats';
$zmSlangStatus               = 'Status';
$zmSlangStepLarge            = 'Large Step';
$zmSlangStepMedium           = 'Medium Step';
$zmSlangStepNone             = 'No Step';
$zmSlangStepSmall            = 'Small Step';
$zmSlangStep                 = 'Step';
$zmSlangStills               = 'Stills';
$zmSlangStopped              = 'Stoppet';
$zmSlangStop                 = 'Stop';
$zmSlangStream               = 'Stream';
$zmSlangSubmit               = 'Submit';
$zmSlangSystem               = 'System';
$zmSlangTele                 = 'Tele';
$zmSlangThumbnail            = 'Thumbnail';
$zmSlangTilt                 = 'Tilt';
$zmSlangTimeDelta            = 'Time Delta';
$zmSlangTimestampLabelFormat = 'Tidsstempel M�rkning�s Format';
$zmSlangTimestampLabelX      = 'Tidsstempel M�rkning X';
$zmSlangTimestampLabelY      = 'Tidsstempel M�rkning Y';
$zmSlangTimestamp            = 'Tidsstempel';
$zmSlangTimeStamp            = 'Tids Stempel';
$zmSlangTime                 = 'Tid';
$zmSlangToday                = 'Idag';
$zmSlangTools                = 'Tools';
$zmSlangTotalBrScore         = 'Total<br/>Skore';
$zmSlangTrackDelay           = 'Track Delay';
$zmSlangTrackMotion          = 'Track Motion';
$zmSlangTriggers             = 'Triggers';
$zmSlangTurboPanSpeed        = 'Turbo Pan Hastighed';
$zmSlangTurboTiltSpeed       = 'Turbo Tilt Hastighed';
$zmSlangType                 = 'Type';
$zmSlangUnarchive            = 'Unarchive';
$zmSlangUnits                = 'Units';
$zmSlangUnknown              = 'Unknown';
$zmSlangUpdateAvailable      = 'En updatering til ZoneMinder er tilstede.';
$zmSlangUpdateNotNecessary   = 'Ingen updatering er n�dvendig.';
$zmSlangUseFilterExprsPost   = '&nbsp;filter&nbsp;expressions'; // This is used at the end of the phrase 'use N filter expressions'
$zmSlangUseFilterExprsPre    = 'Brug&nbsp;'; // This is used at the beginning of the phrase 'use N filter expressions'
$zmSlangUseFilter            = 'Brug Filter';
$zmSlangUsername             = 'Bruger Navn';
$zmSlangUsers                = 'Brugere';
$zmSlangUser                 = 'Bruger';
$zmSlangValue                = 'V�rdig';
$zmSlangVersionIgnore        = 'Ignorer denne version';
$zmSlangVersionRemindDay     = 'P�mind igen om 1 dag';
$zmSlangVersionRemindHour    = 'P�mind igen om 1 time';
$zmSlangVersionRemindNever   = 'Mind ikke om nye versioner';
$zmSlangVersionRemindWeek    = 'P�mind igen om 1 uge';
$zmSlangVersion              = 'Version';
$zmSlangVideoGenFailed       = 'Video Generering Fejlede!';
$zmSlangVideoGenParms        = 'Video Generaring Parametre';
$zmSlangVideoSize            = 'Video St�relse';
$zmSlangVideo                = 'Video';
$zmSlangViewAll              = 'Vis Alle';
$zmSlangViewPaged            = 'View Paged';
$zmSlangView                 = 'Vis';
$zmSlangWake                 = 'Wake';
$zmSlangWarmupFrames         = 'Varmop Billeder';
$zmSlangWatch                = 'Se';
$zmSlangWeb                  = 'Web';
$zmSlangWeek                 = 'Uge';
$zmSlangWhiteBalance         = 'White Balance';
$zmSlangWhite                = 'White';
$zmSlangWide                 = 'Wide';
$zmSlangX10ActivationString  = 'X10 Activerings Streng';
$zmSlangX10InputAlarmString  = 'X10 Input Alarm Streng';
$zmSlangX10OutputAlarmString = 'X10 Output Alarm Streng';
$zmSlangX10                  = 'X10';
$zmSlangYes                  = 'Ja';
$zmSlangYouNoPerms           = 'Du har ikke adgang til denne resourse.';
$zmSlangZoneAlarmColour      = 'Alarm Farve (RGB)';
$zmSlangZoneFilterHeight     = 'Filter H�jde (pixels)';
$zmSlangZoneFilterWidth      = 'Filter Brede (pixels)';
$zmSlangZoneMaxAlarmedArea   = 'Maximum Alarm Omr�de';
$zmSlangZoneMaxBlobArea      = 'Maximum Blob Omr�de';
$zmSlangZoneMaxBlobs         = 'Maximum Blobs';
$zmSlangZoneMaxFilteredArea  = 'Maximum Filtreret Omr�de';
$zmSlangZoneMaxPixelThres    = 'Maximum Pixel Threshold (0-255)';
$zmSlangZoneMaxX             = 'Maximum X (h�jre)';
$zmSlangZoneMaxY             = 'Maximum Y (bund)';
$zmSlangZoneMinAlarmedArea   = 'Minimum Alarm Omr�de';
$zmSlangZoneMinBlobArea      = 'Minimum Blob Omr�de';
$zmSlangZoneMinBlobs         = 'Minimum Blobs';
$zmSlangZoneMinFilteredArea  = 'Minimum Filtreret Omr�de';
$zmSlangZoneMinPixelThres    = 'Minimum Pixel Threshold (0-255)';
$zmSlangZoneMinX             = 'Minimum X (venstre)';
$zmSlangZoneMinY             = 'Minimum Y (top)';
$zmSlangZones                = 'Zoner';
$zmSlangZone                 = 'Zone';
$zmSlangZoom                 = 'Zoom';

// Complex replacements with formatting and/or placements, must be passed through sprintf
$zmClangCurrentLogin         = 'Nuv�rende login er \'%1$s\'';
$zmClangEventCount           = '%1$s %2$s'; // For example '37 Events' (from Vlang below)
$zmClangLastEvents           = 'Sidste %1$s %2$s'; // For example 'Last 37 Events' (from Vlang below)
$zmClangLatestRelease        = 'Den Seneste version er v%1$s, du har v%2$s.';
$zmClangMonitorCount         = '%1$s %2$s'; // For example '4 Monitors' (from Vlang below)
$zmClangMonitorFunction      = 'Monitor %1$s Function';
$zmClangRunningRecentVer     = 'Du K�re med seneste version af ZoneMinder, v%s.';

// The next section allows you to describe a series of word ending and counts used to 
// generate the correctly conjugated forms of words depending on a count that is associated
// with that word.
// This intended to allow phrases such a '0 potatoes', '1 potato', '2 potatoes' etc to
// conjugate correctly with the associated count.
// In some languages such as English this is fairly simple and can be expressed by assigning
// a count with a singular or plural form of a word and then finding the nearest (lower) value.
// So '0' of something generally ends in 's', 1 of something is singular and has no extra
// ending and 2 or more is a plural and ends in 's' also. So to find the ending for '187' of
// something you would find the nearest lower count (2) and use that ending.
//
// So examples of this would be
// $zmVlangPotato = array( 0=>'Potatoes', 1=>'Potato', 2=>'Potatoes' );
// $zmVlangSheep = array( 0=>'Sheep' );
//
// where you can have as few or as many entries in the array as necessary
// If your language is similar in form to this then use the same format and choose the
// appropriate zmVlang function below.
// If however you have a language with a different format of plural endings then another
// approach is required . For instance in Russian the word endings change continuously
// depending on the last digit (or digits) of the numerator. In this case then zmVlang
// arrays could be written so that the array index just represents an arbitrary 'type'
// and the zmVlang function does the calculation about which version is appropriate.
//
// So an example in Russian might be (using English words, and made up endings as I
// don't know any Russian!!)
// $zmVlangPotato = array( 1=>'Potati', 2=>'Potaton', 3=>'Potaten' );
//
// and the zmVlang function decides that the first form is used for counts ending in
// 0, 5-9 or 11-19 and the second form when ending in 1 etc.
//

// Variable arrays expressing plurality, see the zmVlang description above
$zmVlangEvent                = array( 0=>'Events', 1=>'Event', 2=>'Events' );
$zmVlangMonitor              = array( 0=>'Monitors', 1=>'Monitor', 2=>'Monitors' );

// You will need to choose or write a function that can correlate the plurality string arrays
// with variable counts. This is used to conjugate the Vlang arrays above with a number passed
// in to generate the correct noun form.
//
// In languages such as English this is fairly simple 
// Note this still has to be used with printf etc to get the right formating
function zmVlang( $lang_var_array, $count )
{
	krsort( $lang_var_array );
	foreach ( $lang_var_array as $key=>$value )
	{
		if ( abs($count) >= $key )
		{
			return( $value );
		}
	}
	die( 'Error, unable to correlate variable language string' );
}

// This is an version that could be used in the Russian example above
// The rules are that the first word form is used if the count ends in
// 0, 5-9 or 11-19. The second form is used then the count ends in 1
// (not including 11 as above) and the third form is used when the 
// count ends in 2-4, again excluding any values ending in 12-14.
// 
// function zmVlang( $lang_var_array, $count )
// {
// 	$secondlastdigit = substr( $count, -2, 1 );
// 	$lastdigit = substr( $count, -1, 1 );
// 	// or
// 	// $secondlastdigit = ($count/10)%10;
// 	// $lastdigit = $count%10;
// 
// 	// Get rid of the special cases first, the teens
// 	if ( $secondlastdigit == 1 && $lastdigit != 0 )
// 	{
// 		return( $lang_var_array[1] );
// 	}
// 	switch ( $lastdigit )
// 	{
// 		case 0 :
// 		case 5 :
// 		case 6 :
// 		case 7 :
// 		case 8 :
// 		case 9 :
// 		{
// 			return( $lang_var_array[1] );
// 			break;
// 		}
// 		case 1 :
// 		{
// 			return( $lang_var_array[2] );
// 			break;
// 		}
// 		case 2 :
// 		case 3 :
// 		case 4 :
// 		{
// 			return( $lang_var_array[3] );
// 			break;
// 		}
// 	}
// 	die( 'Error, unable to correlate variable language string' );
// }

// This is an example of how the function is used in the code which you can uncomment and 
// use to test your custom function.
//$monitors = array();
//$monitors[] = 1; // Choose any number
//echo sprintf( $zmClangMonitorCount, count($monitors), zmVlang( $zmVlangMonitor, count($monitors) ) );

// In this section you can override the default prompt and help texts for the options area
// These overrides are in the form of $zmOlangPrompt<option> and $zmOlangHelp<option>
// where <option> represents the option name minus the initial ZM_
// So for example, to override the help text for ZM_LANG_DEFAULT do
//$zmOlangPromptLANG_DEFAULT = "This is a new prompt for this option";
//$zmOlangHelpLANG_DEFAULT = "This is some new help for this option which will be displayed in the popup window when the ? is clicked";
//

?>