#pragma once

#define NNN 20

typedef struct {
	int max, min;
	char rname[NNN];
}rock;
void send_data(rock);