<?php

/**
 * Module Name: Hide User Ranks
 * Author:      J.D. Grimes
 * Author URI:  http://codesymphony.co/
 * Plugin URI:  http://codesymphony.co/
 * Version:     1.0.0
 * License:     GPLv2+
 * Description: Hides user ranks in the Top Users table.
 *
 * ---------------------------------------------------------------------------------|
 * Copyright 2015  J.D. Grimes  (email : jdg@codesymphony.co)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or later, as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 * ---------------------------------------------------------------------------------|
 *
 * @package wordpoints-hide-ranks
 * @version 1.0.0
 * @author  J.D. Grimes <jdg@codesymphony.co>
 * @license GPLv2+
 */

remove_filter(
	'wordpoints_points_top_users_username'
	, 'wordpoints_ranks_points_top_users_username_filter'
);

// EOF
