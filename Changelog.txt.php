<?php
/*
Plugin Name: Charlies content
** History **
  2010-05-18 2.1.b ( The review )
					Admin page design review mainly for the "clear" theme
					Code review
  2010-05-18 2.1.a (The basic 2.1 version)
						 Just support 2.1.
  2010-02-08 2.0.f (The reset version)
						 includes Reset ALL Charlies' configuration in second tab
						 translation system (Thanks to ddtddt).
						 minor language/plugin corrections.
  2009-05-24 2.0.e (Called ngoc version)
	           buffermessage correction for flv
						 The lumenation bypass is maintain (but no longer needed with recent Piwigo versions)
						 getID3 v2.0.0-b5 not tested => Still in v2.0.0-b4
  2009-05-24 2.0.d (Called lumenation bypass)
	           some url were generated with https://
  2009-04-13 2.0.c 
	           Flipflip proposal to exclude GETID3 for some extends
						 nolive proposal to support GPX extensions
						 Forced width/height are supported by flvstreamer
  2009-02-15 2.0.b 
	           Admin configuration menu
						 And related changes (New version of GetID3)

  2008-10-30 2.0.a (Not distributed)
             Smarty version for Piwigo (Don't use it with PhpWebGallery 1.7.x)
  2008/03/26: error_reporting(E_ERROR | E_WARNING | E_PARSE);
             during getid3 call (Only one referenced case).             
  2008/02/22:
 * 3GP support : video streams from mobile phones.
   There are two different standards for this format:
   3gp for GSM-based Phones, or 3g2 for CDMA-based Phones.
 * $page['slideshow'] active/inactive support for "Pause" enhancement 
   so Charlies won't act on active slideshow but will act on Slideshow pause

  2007-10-21 1.7.a First release for PhpWebGallery 1.7
  2006-01-06 Video Integrator and followed by Media Integrator
  and previously Kitof's Original MOD.
 **/
?>