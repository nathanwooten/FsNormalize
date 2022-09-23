<?php

function fsNormalize( $path, $before = '', $after = '', $separator = DIRECTORY_SEPARATOR )
{

  $path = str_replace( [ '\\', '/' ], $separator, $path );

  if ( isset( $before ) ) {
    $path = ltrim( $path, $separator );
    if ( ! empty( $before ) ) {
      $before = $separator;
      $path = $before . $path;
    }
  }

  if ( isset( $after ) ) {
    $path = rtrim( $path, $separator );
    if ( ! empty( $after ) ) {
      $after = $separator;
      $path .= $after;
    }
  }

  return $path;

}