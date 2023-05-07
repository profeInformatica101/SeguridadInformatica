sudo mkdir -p /mnt/persistence
sudo cryptsetup open /dev/[nombre_de_la_partición_cifrada] persistence
sudo mount /dev/mapper/persistence /mnt/persistence
echo "/ union" > /mnt/persistence/persistence.co
