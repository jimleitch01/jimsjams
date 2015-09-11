index=network earliest=-30m source="/var/log/syslog/loadbalancer.current" | timechart count by host


index=network  source="/var/log/syslog/loadbalancer.current" lbpool=lpbpws300_DE_secure_pool| head 20000| dedup client_addr |  iplocation client_addr | table clientip, status, City, Country

index=network  source="/var/log/syslog/loadbalancer.current" lbpool=lpbpws300_NL_secure_pool| head 20000| dedup client_addr |  iplocation client_addr |  geostats count

https://www.maxmind.com/en/geoip2-city-database-accuracy



+%Y%m%dT%H%M%S.%3N
