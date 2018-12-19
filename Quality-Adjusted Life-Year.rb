input = STDIN.read.split("\n").drop(1)

total = 0

for line in input
  quality = line.split[0].to_f
  years = line.split[1].to_f
  total += quality*years
end

print total