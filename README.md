# Klevu_MysqlCompat
This is a compatible sub package to the [klevu-smart-search-M2](https://github.com/klevu/klevu-smart-search-M2) repository. 
Only useful when website is using the Catalog Search Engine as MySQL and Preserve Layout option for Search Result Page.
This module created to make the Klevu Magento 2 module compatible with MySQL search engine.

# Compatibility
- Magento 2.0 to Magento 2.3 versions
- Not compatible(no needed) to Magento 2.4 versions

| Magento Version | Support |
| :----: | :----: | 
| Open Source \<= 2.3.x | Yes
| Commerce <= 2.3.x | Yes |
| Open Source >= 2.4.0 | No |
| Commerce >= 2.4.0 | No | 

# Installation

```bash
composer require sandipklevu/module-mysqlcompat
php bin/magento setup:upgrade
php bin/magento setup:di:compile 
php bin/magento setup:static-content:deploy
```


# For Queries
- Write to us Klevu support support@klevu.com 


