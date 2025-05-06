<?php

/***************************************************************************
 *   Copyright (C) 2009-2011 by Geo Varghese                               *
 *   seopanel.in                                                           *
 *                                                                         *
 *   This program is free software; you can redistribute it and/or modify  *
 *   it under the terms of the GNU General Public License as published by  *
 *   the Free Software Foundation; either version 2 of the License, or     *
 *   (at your option) any later version.                                   *
 *                                                                         *
 *   This program is distributed in the hope that it will be useful,       *
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of        *
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the         *
 *   GNU General Public License for more details.                          *
 *                                                                         *
 *   You should have received a copy of the GNU General Public License     *
 *   along with this program; if not, write to the                         *
 *   Free Software Foundation, Inc.,                                       *
 *   59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.             *
 ***************************************************************************/

# The web path or url to access seo panel through browser.
define('SP_WEBPATH', 'localhost:8080');

# DB settings - You can get this info from your web hosting provider.
# The name of the database for seo panel
define('DB_NAME', 'DB_NAME');

# DB database username
define('DB_USER', 'DB_USER');

# DB database password
define('DB_PASSWORD', 'DB_PASSWORD');

# DB hostname
define('DB_HOST', 'DB_HOST');

# The name of the database engine for seo panel
define('DB_ENGINE', 'mysql');

# The version of seo panel installed
define('SP_INSTALLED', '4.8.0');

# The DB debug mode
define('SP_DEBUG', 0);

# The seo panel seconds for session timeout
define('SP_TIMEOUT', 18000);

# The timezone for seo panel calculated reports
define('SP_TIMEZONE', 'America/Los_Angeles');

# Absolute path to the seo panel directory.
define('SP_ABSPATH', dirname(__FILE__) . '/..');

# To enable debug mode
define('SP_DEBUG_MODE', false);

# To prevent sql attacks
define('SP_PREVENT_SQL_ATTACKS', true);
